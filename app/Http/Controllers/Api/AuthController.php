<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Đăng ký tài khoản mới
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors(),
                ], 422);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'success' => true,
                'message' => 'Đăng ký tài khoản thành công',
                'data' => [
                    'user' => $user,
                    'access_token' => $token,
                    'token_type' => 'Bearer',
                ],
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Đã xảy ra lỗi trong quá trình đăng ký',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Đăng nhập
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors(),
                ], 422);
            }

            if (!Auth::attempt($request->only('email', 'password'))) {
                return response()->json([
                    'success' => false,
                    'message' => 'Email hoặc mật khẩu không chính xác',
                ], 401);
            }

            $user = User::where('email', $request->email)->firstOrFail();

            // Xóa token cũ nếu có
            $user->tokens()->delete();

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'success' => true,
                'message' => 'Đăng nhập thành công',
                'data' => [
                    'user' => $user,
                    'access_token' => $token,
                    'token_type' => 'Bearer',
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Đã xảy ra lỗi trong quá trình đăng nhập',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Lấy thông tin người dùng hiện tại
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function me(Request $request)
    {
        return response()->json([
            'success' => true,
            'data' => $request->user(),
        ]);
    }

    /**
     * Đăng xuất
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        try {
            // Lấy token từ header
            $bearerToken = $request->bearerToken();
            
            if (!$bearerToken) {
                return response()->json([
                    'success' => false,
                    'message' => 'Token không được cung cấp',
                    'hint' => 'Vui lòng thêm header Authorization: Bearer {token} hoặc sử dụng route /api/logout/{token}'
                ], 401);
            }
            
            // Tìm token trong database
            $tokenModel = PersonalAccessToken::findToken($bearerToken);
            
            if (!$tokenModel) {
                return response()->json([
                    'success' => false,
                    'message' => 'Token không hợp lệ hoặc đã hết hạn',
                ], 401);
            }
            
            // Xóa token
            $tokenModel->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Đăng xuất thành công',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Đã xảy ra lỗi trong quá trình đăng xuất',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Đăng xuất với token trong URL
     *
     * @param  string  $token
     * @return \Illuminate\Http\JsonResponse
     */
    public function logoutWithToken($token)
    {
        try {
            // Tìm token trong database
            $tokenModel = PersonalAccessToken::findToken($token);
            
            if (!$tokenModel) {
                return response()->json([
                    'success' => false,
                    'message' => 'Token không hợp lệ hoặc đã hết hạn',
                ], 401);
            }
            
            // Xóa token
            $tokenModel->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Đăng xuất thành công',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Đã xảy ra lỗi trong quá trình đăng xuất',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Đăng xuất khỏi tất cả thiết bị
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logoutAll(Request $request)
    {
        // Xóa tất cả token
        $request->user()->tokens()->delete();

        return response()->json([
            'success' => true,
            'message' => 'Đã đăng xuất khỏi tất cả thiết bị',
        ]);
    }

    /**
     * Test đăng xuất không cần xác thực
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logoutTest()
    {
        return response()->json([
            'success' => true,
            'message' => 'API logout test hoạt động bình thường',
        ]);
    }
}