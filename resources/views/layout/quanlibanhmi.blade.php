


<div class="container">
  <h1 class="mb-4">Quản lý Bánh mì</h1>

  {{-- Form Thêm mới --}}
  <div class="card mb-4">
    <div class="card-header">Thêm mới bánh mì</div>
    <div class="card-body">
      <form action="{{ route('banhmi.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
          <label for="name">Tên bánh mì</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label for="price">Giá</label>
          <input type="number" name="price" id="price" class="form-control" required>
        </div>
        <div class="form-group mb-3">
          <label for="description">Mô tả</label>
          <textarea name="description" id="description" rows="3" class="form-control"></textarea>
        </div>
        <div class="form-group mb-3">
          <label for="image_url">Image URL</label>
          <input type="text" name="image_url" id="image_url" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label for="detail_url">Detail URL</label>
          <input type="text" name="detail_url" id="detail_url" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
      </form>
    </div>
  </div>

  {{-- Danh sách Bánh mì --}}
  <div class="card">
    <div class="card-header">Danh sách bánh mì</div>
    <div class="card-body">
      @php
          use App\Models\BanhMiHtml;
          $banhMis = BanhMiHtml::all();
      @endphp

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tên bánh mì</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th>Ảnh</th>
            <th>Chi tiết</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          @foreach($banhMis as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ number_format($item->price, 0) }} ₫</td>
            <td>{{ $item->description }}</td>
            <td>
              @if($item->image_url)
                <img src="{{ $item->image_url }}" alt="{{ $item->name }}" width="80">
              @endif
            </td>
            <td>
              @if($item->detail_url)
                <a href="{{ $item->detail_url }}" target="_blank">Xem chi tiết</a>
              @endif
            </td>
            <td>
              <a href="{{ route('banhmi.edit', $item->id) }}" class="btn btn-warning btn-sm">Sửa</a>
              <form action="{{ route('banhmi.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>







