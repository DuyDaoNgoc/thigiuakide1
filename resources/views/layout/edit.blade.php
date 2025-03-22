@extends('layout.quanlibanhmi')

@section('content')
<div class="container">
    <h1>Sửa Bánh mì</h1>

    {{-- Hiển thị thông báo lỗi (nếu có) --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form chỉnh sửa, gửi dữ liệu đến banhmi.update --}}
    <form action="{{ route('banhmi.update', $banhMi->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Tên bánh mì --}}
        <div class="mb-3">
            <label for="name" class="form-label">Tên bánh mì</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="form-control"
                value="{{ old('name', $banhMi->name) }}" 
                required
            >
        </div>

        {{-- Giá --}}
        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <input 
                type="number" 
                name="price" 
                id="price" 
                class="form-control"
                value="{{ old('price', $banhMi->price) }}" 
                required
            >
        </div>

        {{-- Mô tả --}}
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea 
                name="description" 
                id="description" 
                rows="3" 
                class="form-control"
            >{{ old('description', $banhMi->description) }}</textarea>
        </div>

        {{-- Ảnh --}}
        <div class="mb-3">
            <label for="image_url" class="form-label">URL ảnh</label>
            <input 
                type="text" 
                name="image_url" 
                id="image_url" 
                class="form-control"
                value="{{ old('image_url', $banhMi->image_url) }}"
            >
        </div>

        {{-- Link chi tiết --}}
        <div class="mb-3">
            <label for="detail_url" class="form-label">URL chi tiết</label>
            <input 
                type="text" 
                name="detail_url" 
                id="detail_url" 
                class="form-control"
                value="{{ old('detail_url', $banhMi->detail_url) }}"
            >
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('banhmi.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>