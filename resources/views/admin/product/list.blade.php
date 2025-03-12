@extends('admin.main')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Danh sách sản phẩm</h4>
            <p class="card-description">  
                <a href="add">Thêm sản phẩm</a>
            </p>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>ID menu</th>
                        <th>Giá gốc</th>
                        <th>Giá giảm</th>
                        <th>Hình ảnh</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $key => $product)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->menu_id }}</td>
                        <td>{{ number_format($product->price, 3) }} Vnđ</td>
                        <td>{{ number_format($product->price_sale, 3) }} Vnđ</td>
                        <td>
                            <img src="{{ asset($product->thumb) }}" alt="Hình ảnh">
                        </td>
                        <td>
                            <a href="edit/{{ $product->id }}" class="btn btn-sm btn-warning" title="Chỉnh sửa">
                                <i class="mdi mdi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-danger" onclick="removeRow({{ $product->id }}, '{{ url('admin/products/destroy') }}')">
                                <i class="mdi mdi-delete"></i> Xóa
                            </button> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

                {{ $products->links() }}

        </div>
    </div>
</div> 
@endsection
