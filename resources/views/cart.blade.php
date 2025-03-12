@extends('main')

@section('content')
<div class="container">
    <h2>Giỏ hàng</h2>
    <br>
    <div class="tableInfo">
                <form method="POST" action="luugiohang.php?id=1">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">ID</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá tiền</th>
                <th scope="col">Tùy chọn</th>
              </tr>
            </thead>
                    <tbody>
                  <tr>
          <td>1</td>
          <td>3003</td>
          <td>Phòng và Chữa Bệnh Ung Thư </td>
          <td><img src="images/product/benh-ung-thu.png" alt="Phòng và Chữa Bệnh Ung Thư "></td>
          <td>
            <input type="number" name="qty[3003]" value="2" min="1">
          </td>
          <td>75.000 Việt Nam Đồng</td>
          <td><a href="xoaspgiohang.php?id_product=3003">Xóa</a></td>
        </tr>
                  
                </tbody>
    </table>
          <div style="height: 30px;"></div>
    <h4 style="float: right;">Tổng tiền: 240.000 Việt Nam Đồng</h4>
    <h5 style="float: right; width: 12%;">Số lượng: 3</h5>
    <br><br>
    <input type="submit" class="btn btn-info" name="update_cart" value="Cập nhật giỏ hàng" style="float:right; width: 20%; margin-right: 10px;">
    <input type="submit" class="btn btn-info" name="submit" value="Thanh toán" style="float:right; width: 20%;margin-right: 10px;">
  </form>
    </div>
</div>
@endsection