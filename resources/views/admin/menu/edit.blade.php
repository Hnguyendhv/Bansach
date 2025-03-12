@extends('admin.main')
@section('head')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

@endsection
@section('content')

    <div class="content-wrapper">
    @include('admin.alert')

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Default form</h4>
            <p class="card-description"> Basic form layout </p>
            <form class="forms-sample" method="post" action="">
                <div class="form-group">
                <label for="exampleInputUsername1">Tên danh mục</label>
                <input type="text" name="name" value="{{$menu->name}}" class="form-control"  placeholder="Tên danh mục">
                </div>
                <div class="form-group">
                      <label for="exampleFormControlSelect2">Danh mục</label>
                      <select class="form-control"  name="parent_id">
                        <option value="0" {{$menu->parent_id==0 ? 'selected' : ''}}>---</option>

                        @foreach ($menus as $menuParent)
                        <option value="{{$menuParent->id}}"
                            {{$menu->parent_id==$menuParent->id ? 'selected' : ''}}>
                            {{$menuParent->name}}</option>
                        @endforeach
                      </select>
                    </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <input type="text" class="form-control" value="{{$menu->description}}" placeholder="Mô tả ngắn" name="description">
                </div>
                <!-- <div class="form-group">
                <label for="exampleInputPassword1">Mô tả chi tiết</label>
                <input type="text" class="form-control" id="content" placeholder="Mô tả chi tiết" name="content">
                </div> -->


              
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="active" id="optionsRadios1" value="1" {{$menu->active==1?'checked=""':''}}> hiển thị <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="active" id="optionsRadios2" value="0" {{$menu->active==0?'checked=""':''}}> không <i class="input-helper"></i></label>
                      </div>
                      
                    </div>
           

                <textarea id="content" name="content">{{$menu->content}}</textarea>

                <button type="submit" class="btn btn-gradient-primary me-2">Cập nhật danh mục</button>
                <button class="btn btn-light">Cancel</button>
                @csrf
            </form>
            </div>
        </div>
        </div>
        
        
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>

@endsection
@section('footer')
<script>
CKEDITOR.replace( 'content' );
</script>


@endsection