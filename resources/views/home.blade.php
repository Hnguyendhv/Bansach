

@extends('main')
@section('content')
<section id="billboard">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <button class="prev slick-arrow">
                    <i class="icon icon-arrow-left"></i>
                </button>

                <div class="main-slider pattern-overlay">
                    <div class="slider-item">
                        <div class="banner-content">
                            <h2 class="banner-title">Life of the Wild</h2>
                            <p>"Life of the Wild" là một cuốn sách tuyệt vời khám phá vẻ đẹp hoang dã của thiên nhiên, từ những khu rừng rậm rạp đến đồng cỏ bao la. Cuốn sách mang đến những câu chuyện đầy cảm hứng về động vật hoang dã và hệ sinh thái phong phú, giúp người đọc trân trọng hơn thế giới tự nhiên. </p>
                            <div class="btn-wrap">
                                <a href="#" class="btn btn-outline-accent btn-accent-arrow">Xem thêm<i
                                        class="icon icon-ns-arrow-right"></i></a>
                            </div>
                        </div><!--banner-content-->
                        <img src="http://localhost/shop/public/teamplate/images/main-banner1.jpg" alt="banner" class="banner-image">
                    </div><!--slider-item-->

                    <div class="slider-item">
                        <div class="banner-content">
                            <h2 class="banner-title">Birds gonna be Happy</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
                                ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
                                urna, a eu.</p>
                            <div class="btn-wrap">
                                <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                        class="icon icon-ns-arrow-right"></i></a>
                            </div>
                        </div><!--banner-content-->
                        <img src="http://localhost/shop/public/teamplate/images/main-banner2.jpg" alt="banner" class="banner-image">
                    </div><!--slider-item-->

                </div><!--slider-->

                <button class="next slick-arrow">
                    <i class="icon icon-arrow-right"></i>
                </button>

            </div>
        </div>
    </div>

</section>
<section id="client-holder" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="inner-content">
                <div class="logo-wrap">
                    <div class="grid">
                        <a href="#"><img src="http://localhost/shop/public/teamplate/images/client-image1.png" alt="client"></a>
                        <a href="#"><img src="http://localhost/shop/public/teamplate/images/client-image2.png" alt="client"></a>
                        <a href="#"><img src="http://localhost/shop/public/teamplate/images/client-image3.png" alt="client"></a>
                        <a href="#"><img src="http://localhost/shop/public/teamplate/images/client-image4.png" alt="client"></a>
                        <a href="#"><img src="http://localhost/shop/public/teamplate/images/client-image5.png" alt="client"></a>
                    </div>
                </div><!--image-holder-->
            </div>
        </div>
    </div>
</section>

<section id="featured-books" class="py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header align-center">
                    <div class="title">
                        <span>Danh mục</span>
                    </div>
                    <h2 style="font-family: 'Raleway', sans-serif" class="section-title">Sách sức khỏe</h2>
                </div>

                <div class="product-list" data-aos="fade-up">
                    <div class="row">


                    @foreach ( $prodh as $key => $product )
                        <div class="col-md-3">
                            <a href="product/{{$product->id}}">
                            <div class="product-item">
                                <figure class="product-style">
                                    <img style="height: 320px; width: 150%;" src="{{$product->thumb}}" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Xem thêm</button>
                                </figure>
                                <figcaption>
                                    <h3>{{$product->name}}</h3>
                                    <span class="prev-price">{{number_format($product->price,0,'',' ')}} ₫</span>
                                    <div class="item-price">{{number_format($product->price,0,'',' ')}} ₫</div>
                                </figcaption>
                            </div>
                            </a>
                        </div>
                        @endforeach
                        

                    </div><!--ft-books-slider-->
                </div><!--grid-->


            </div><!--inner-content-->
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="btn-wrap align-right">
                    <a href="#" class="btn-accent-arrow">Xem tất cả <i
                            class="icon icon-ns-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>


<section id="featured-books" class="py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header align-center">
                    <div class="title">
                        <span>Danh mục</span>
                    </div>
                    <h2 class="section-title">Sách thiếu nhi</h2>
                </div>

                <div class="product-list" data-aos="fade-up">
                    <div class="row">


                        @foreach ( $prodc as $key => $product )
                        <div class="col-md-3">
                            <a href="product/{{$product->id}}">
                            <div class="product-item">
                                <figure class="product-style">
                                    <img style="height: 320px; width: 150%;" src="{{$product->thumb}}" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Xem thêm</button>
                                </figure>
                                <figcaption>
                                    <h3>{{$product->name}}</h3>
                                    <span class="prev-price">{{number_format($product->price,0,'',' ')}} ₫</span>
                                    <div class="item-price">{{number_format($product->price,0,'',' ')}} ₫</div>
                                </figcaption>
                            </div>
                            </a>
                        </div>
                        @endforeach
                        

                    </div><!--ft-books-slider-->
                </div><!--grid-->


            </div><!--inner-content-->
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="btn-wrap align-right">
                    <a href="#" class="btn-accent-arrow">Xem tất cả <i
                            class="icon icon-ns-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>



<section id="featured-books" class="py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header align-center">
                    <div class="title">
                        <span>Danh mục</span>
                    </div>
                    <h2 class="section-title">Sách Đời Sống</h2>
                </div>

                <div class="product-list" data-aos="fade-up">
                    <div class="row">


                        @foreach ( $prodl as $key => $product )
                        <div class="col-md-3">
                            <a href="product/{{$product->id}}">
                            <div class="product-item">
                                <figure class="product-style">
                                    <img style="height: 320px; width: 150%;" src="{{$product->thumb}}" alt="Books" class="product-item">
                                    <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Xem thêm</button>
                                </figure>
                                <figcaption>
                                    <h3>{{$product->name}}</h3>
                                    <span class="prev-price">{{number_format($product->price,0,'',' ')}} ₫</span>
                                    <div class="item-price">{{number_format($product->price,0,'',' ')}} ₫</div>
                                </figcaption>
                            </div>
                            </a>
                        </div>
                        @endforeach
                        

                    </div><!--ft-books-slider-->
                </div><!--grid-->


            </div><!--inner-content-->
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="btn-wrap align-right">
                    <a href="#" class="btn-accent-arrow">Xem tất cả <i
                            class="icon icon-ns-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection


