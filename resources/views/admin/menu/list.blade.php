@extends('admin.main')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bordered table</h4>
        <p class="card-description">  <a href="add">Thêm danh mục</a>
        </p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> ID </th>
              <th> Name </th>
              <th> Active </th>
              <th> Update </th>
              <th> &nbsp; </th>
            </tr>
          </thead>
          <tbody>
            {!! \App\Helpers\Helper::menu(menus: $menus) !!}
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
