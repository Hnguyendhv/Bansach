@extends('admin.main')
@section('head')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

@endsection
@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        @include('admin.alert')

        <form class="forms-sample row" method="post" action="" enctype="multipart/form-data">
          @csrf

          <div class="col-6 form-group">
            <label >Tên sản phẩm</label>
            <input type="text" class="form-control" value="{{$product->name}}" placeholder="Nhập tên sản phẩm" name="name">
          </div>
          <div class="col-6 form-group">
            <label >Danh mục</label>
            <select class="form-control"  name="menu_id">
              <option value="0">---</option>

              @foreach ($menus as $menu)
              <option value="{{$menu->id}}" {{$product->menu_id==$menu->id?'selected':''}}>{{$menu->name}}</option>

              @endforeach

            </select>
          </div>
          <div class="col-6 form-group">
            <label >Giá gốc</label>
            <input type="text" class="form-control" value="{{$product->price}}" placeholder="Giá gốc" name="price">
          </div>

          <div class="col-6 form-group">
            <label >Giá giảm</label>
            <input type="text" class="form-control" placeholder="Giá giảm" value="{{$product->price_sale}}" name="price_sale">
          </div>
          <div class="form-group">
            <label >Mô tả</label>
            <textarea class="form-control" rows="4" name="description">{{$product->description}}</textarea>
          </div>
          <div class="form-group">
            <label >Mô tả chi tiết</label>
            <textarea class="form-control" id="content" name="content">{{$product->content}}</textarea>
          </div>
          <input type="hidden" name="active" value="0" class="file-upload-default">
          <div class="form-group">
            <label>Tải hình ảnh</label>
            <div class="input-group col-xs-12">
                <input type="file" class="form-control file-upload-info" name="thumb" id="thumb" onchange="previewImage(event)">
            </div>
            
            @if ($product->thumb)
                <img id="preview-image" src="{{ asset($product->thumb) }}" width="100" class="mt-2">
            @else
                <img id="preview-image" src="" width="100" class="mt-2 d-none">
            @endif
        </div>
        
        

          <button type="submit" class="btn btn-gradient-primary me-2">cập nhật</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>

@endsection
@section('footer')
<script>
    CKEDITOR.replace('content');

    function previewImage(event) {
        let input = event.target;
        let reader = new FileReader();

        reader.onload = function(){
            let imgElement = document.getElementById("preview-image");
            imgElement.src = reader.result;
            imgElement.classList.remove('d-none'); // Hiển thị ảnh nếu ban đầu ẩn
        };

        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]); // Đọc file và hiển thị ảnh
        }
    }
</script>
@endsection

