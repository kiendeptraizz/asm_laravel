@extends('layouts.admin')

@section('title', 'Chi tiết người dùng - Admin Panel')

@section('header', 'Chi tiết người dùng')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Thông tin người dùng</h5>
        <div>
            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">
                <i class="fas fa-edit"></i> Chỉnh sửa
            </a>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Quay lại
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th style="width: 200px">ID:</th>
                <td>{{ $user->id }}</td>
            </tr>
            <tr>
                <th>Tên:</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Vai trò:</th>
                <td>
                    @if($user->is_admin)
                        <span class="badge bg-danger">Admin</span>
                    @else
                        <span class="badge bg-info">Người dùng</span>
                    @endif
                </td>
            </tr>
            <tr>
                <th>Ngày tạo:</th>
                <td>{{ $user->created_at->format('d/m/Y H:i:s') }}</td>
            </tr>
            <tr>
                <th>Ngày cập nhật:</th>
                <td>{{ $user->updated_at->format('d/m/Y H:i:s') }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection