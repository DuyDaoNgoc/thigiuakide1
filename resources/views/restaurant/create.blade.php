


<div class="container">
    <h1>Thêm Nhà hàng</h1>

    {{-- Hiển thị tất cả lỗi ở đầu form --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('layout.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        {{-- Tên nhà hàng --}}
        <div class="mb-3">
            <label for="name" class="form-label">Tên nhà hàng</label>
            <input type="text" 
                   name="name" 
                   id="name" 
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text"
                   name="email"
                   id="email"
                   class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Số điện thoại --}}
        <div class="mb-3">
            <label for="phone" class="form-label">Số điện thoại</label>
            <input type="text"
                   name="phone"
                   id="phone"
                   class="form-control @error('phone') is-invalid @enderror"
                   value="{{ old('phone') }}">
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Địa chỉ --}}
        <div class="mb-3">
            <label for="address" class="form-label">Địa chỉ</label>
            <input type="text"
                   name="address"
                   id="address"
                   class="form-control @error('address') is-invalid @enderror"
                   value="{{ old('address') }}">
            @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Mô tả --}}
        <div class="mb-3">
            <label for="description" class="form-label">Mô tả</label>
            <textarea name="description"
                      id="description"
                      rows="3"
                      class="form-control @error('description') is-invalid @enderror"
            >{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Giờ mở cửa --}}
        <div class="mb-3">
            <label for="opening_hour" class="form-label">Giờ mở cửa (HH:MM)</label>
            <input type="text"
                   name="opening_hour"
                   id="opening_hour"
                   class="form-control @error('opening_hour') is-invalid @enderror"
                   value="{{ old('opening_hour') }}">
            @error('opening_hour')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Giờ đóng cửa --}}
        <div class="mb-3">
            <label for="closing_hour" class="form-label">Giờ đóng cửa (HH:MM)</label>
            <input type="text"
                   name="closing_hour"
                   id="closing_hour"
                   class="form-control @error('closing_hour') is-invalid @enderror"
                   value="{{ old('closing_hour') }}">
            @error('closing_hour')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Ảnh --}}
        <div class="mb-3">
            <label for="image" class="form-label">Ảnh</label>
            <input type="file"
                   name="image"
                   id="image"
                   class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Thêm nhà hàng</button>
    </form>
</div>

