

@extends('main')
@section('content')
<section id="popular-books" class="bookshelf py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header align-center">
                    <h2 class="section-title">Danh sách sản phẩm</h2>
                </div>
               

                <ul class="tabs">
                    <li data-tab-target="#all-genre" class="active tab">Tất cả sản phẩm</li>
                    @foreach ( $menus as $key => $menu )
                    <li data-tab-target="#tab-{{$menu->id}}" class="tab">
                        {{$menu->name}}
                    </li>
                    @endforeach
                    
                </ul>

            <div class="tab-content">
                <div id="all-genre" data-tab-content class="active">
                    <div class="row">
                        @foreach ( $products as $key => $product )
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
                                    <div class="item-price">{{number_format($product->price,0,'',' ')}} ₫</div>                                </figcaption>
                            </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @foreach ( $menus as $key => $menu )
                <div id="tab-{{$menu->id}}" data-tab-content>
                    <div class="row">
                        @foreach ( $products->where('menu_id',$menu->id) as $key => $product )
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
                                    <div class="item-price">{{number_format($product->price,0,'',' ')}} ₫</div>                                </figcaption>
                            </div>
                            </a>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
