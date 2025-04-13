@extends('layouts.admin')

@section('title', 'Chỉnh sửa sản phẩm')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .preview-image {
        max-width: 200px;
        max-height: 200px;
        margin: 10px;
    }
    .image-container {
        position: relative;
        display: inline-block;
        margin: 10px;
    }
    .image-container img {
        max-width: 200px;
        max-height: 200px;
    }
    .image-container .delete-btn {
        position: absolute;
        top: 5px;
        right: 5px;
        background-color: rgba(255, 0, 0, 0.7);
        color: white;
        border: none;
        border-radius: 50%;
        width: 25px;
        height: 25px;
        font-size: 12px;
        cursor: pointer;
    }
</style>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Chỉnh sửa sản phẩm</h1>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Quay lại
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên sản phẩm <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Mô tả ngắn</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description', $product->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="content" class="form-label">Nội dung chi tiết</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="6">{{ old('content', $product->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Giá <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $product->price) }}" min="0" required>
                            <span class="input-group-text">đ</span>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="sale_price" class="form-label">Giá khuyến mãi</label>
                        <div class="input-group">
                            <input type="number" class="form-control @error('sale_price') is-invalid @enderror" id="sale_price" name="sale_price" value="{{ old('sale_price', $product->sale_price) }}" min="0">
                            <span class="input-group-text">đ</span>
                            @error('sale_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Số lượng <span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}" min="0" required>
                        @error('quantity')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="categories" class="form-label">Danh mục <span class="text-danger">*</span></label>
                        <select class="form-control select2 @error('categories') is-invalid @enderror" id="categories" name="categories[]" multiple required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ in_array($category->id, old('categories', $product->categories->pluck('id')->toArray())) ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('categories')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">Hình ảnh đại diện</label>
                        <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail" accept="image/*">
                        @error('thumbnail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="thumbnail-preview" class="mt-2">
                            @if($product->thumbnail)
                                <img src="{{ Storage::url($product->thumbnail) }}" class="preview-image" alt="{{ $product->name }}">
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="images" class="form-label">Thêm hình ảnh sản phẩm (có thể chọn nhiều)</label>
                        <input type="file" class="form-control @error('images') is-invalid @enderror" id="images" name="images[]" accept="image/*" multiple>
                        @error('images')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div id="images-preview" class="mt-2 d-flex flex-wrap"></div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Hình ảnh hiện tại</label>
                        <div class="d-flex flex-wrap">
                            @foreach($product->images as $image)
                                <div class="image-container">
                                    <img src="{{ Storage::url($image->image) }}" alt="Product image">
                                    <button type="button" class="delete-btn" onclick="toggleDeleteImage({{ $image->id }})">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <input type="checkbox" name="delete_images[]" value="{{ $image->id }}" style="display: none;" id="delete-image-{{ $image->id }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">Đang bán</label>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ old('is_featured', $product->is_featured) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_featured">Sản phẩm nổi bật</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Cập nhật sản phẩm
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize Select2
        $('.select2').select2();
        
        // Thumbnail preview
        $('#thumbnail').change(function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#thumbnail-preview').html('<img src="' + e.target.result + '" class="preview-image">');
                }
                reader.readAsDataURL(file);
            }
        });
        
        // Multiple images preview
        $('#images').change(function() {
            $('#images-preview').html('');
            const files = this.files;
            for (let i = 0; i < files.length; i++) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#images-preview').append('<img src="' + e.target.result + '" class="preview-image">');
                }
                reader.readAsDataURL(files[i]);
            }
        });
    });
    
    // Toggle delete image checkbox
    function toggleDeleteImage(imageId) {
        const checkbox = document.getElementById('delete-image-' + imageId);
        checkbox.checked = !checkbox.checked;
        
        const button = checkbox.previousElementSibling;
        if (checkbox.checked) {
            button.style.backgroundColor = 'rgba(0, 0, 0, 0.7)';
        } else {
            button.style.backgroundColor = 'rgba(255, 0, 0, 0.7)';
        }
    }
</script>
@endsection