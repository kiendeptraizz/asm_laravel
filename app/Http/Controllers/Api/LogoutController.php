<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class LogoutController extends Controller
{
    /**
     * Đăng xuất người dùng
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
                    'hint' => 'Vui lòng thêm header Authorization: Bearer {token}'
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
}
