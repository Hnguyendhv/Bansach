@extends('main')
@section('content')
<section id="best-selling" class="leaf-pattern-overlay">
    <div class="corner-pattern-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
            
                <form action="themsp.php?id=3025" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <figure class="products-thumb">
                                <img src="../{{$product->thumb}}" alt="Books" class="product-item">
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <div class="product-entry">
                                <h2 class="section-title divider">{{$product->name}}</h2>

                                <div class="products-content">
                                    <h4 class="item-title">Giới thiệu:</h4>
                                    <input type="hidden" name="sp_ten" id="sp_ten" value="7 Thói Quen Để Thành Đạt">
                                    <input type="hidden" name="sp_gia" id="sp_gia" value="75">
                                    <input type="hidden" name="hinhdaidien" id="hinhdaidien" value="thanh_dat-7.png">
                                    <p>{{$product->description}}</p>
                                    <span class="prev-price">{{number_format($product->price,0,'',' ')}} ₫</span>
                                    <div class="item-price">{{number_format($product->price,0,'',' ')}} ₫</div>
                                    <div>Số lượng đặt mua: <input type="number" class="form-control" id="soluong" name="soluong" value="1" min="1"></div>
                                    <div class="btn-wrap">
                                        <button type="submit" value="submit" class="btn-accent-arrow">Mua ngay <i class="icon icon-ns-arrow-right"></i></button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        
                    </div>
                    @csrf
                </form>
                
                                    
                <div class="card">
            <div class="container-fluid">
                <h3>Bình luận về sản phẩm</h3>
            </div>

        </div>
    </div>
</div></div></section>
@endsection
