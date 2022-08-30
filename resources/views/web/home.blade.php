@extends('web.layout')
        
@section('content')
    <!-- hero area start -->
    <section class="hero-area ptb-80" style="background-image: url({{ asset('images/park.jpeg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-10">
                    <div class="hero-area-content ptb-80">
                        <h1>Shimuhahe Smart Shop, A Place of All Products</h1>
                        <p>Here you can get all products including Laptop computers, Desktop computers and Bicycles <span>Computers shop</span>, <span> Electronic devices repair </span>,<span> Bicycle riding trainings</span> and <span>  Bicycle renting</span></p>
                        <a href="#shop" class="krishok-btn">Shop Now <i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-slider">
            <div class="item-content">
                <div class="item-slider item-slider1"></div>
                <div class="item-slider item-slider2"></div>
            </div>
        </div>
        <div class="item-thumbnail">
            <a href="#" data-slide-index="0">
                <div class="list-thumb list-thumb1"><img src="{{ asset('images/ride.jpeg') }}"> </div>
            </a>
            <a href="#" data-slide-index="1">
                <div class="list-thumb list-thumb2"><img src="{{ asset('images/repair.jpeg') }}"></div>
            </a>
        </div><!--/Slider thumbnail-->
    </section><!-- hero area end -->
    <!-- shopping product area start -->
    <section class="shopping-product ptb-80" id="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="shopping-product-menu max-width-360">
                        <ul>
                            <li data-filter=".all" class="active">Electronic & Accessories</li>
                            {{-- <li data-filter=".new">New</li>
                            <li data-filter=".best">Best Sells</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row product-item">
                @foreach ($electronics as $product)
                    <div class="col-lg-3 col-sm-6 all">
                        <div class="sell-item max-width-360">
                            <div class="product-img">
                                <img src="/image/{{ $product->image }}" alt="{{ $product->name }}" height="300" style="height: 200px;">
                                <div class="product-img-overlay">
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                        <input type="hidden" value="{{ number_format($product->amount) }}" name="amount">
                                        <input type="hidden" value="{{ $product->image }}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <button class="krishok-btn">Add To Cart <i class="fa fa-shopping-cart"></i></button>
                                    </form>
                                </div>
                            </div>
                            <p><a href="/products/{{$product->id}}">{{ $product->name }}</a></p>
                            <h5>{{ number_format($product->amount) }}RWF</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="pagination">
                        {{-- <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="active"><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li> --}}
                        {{-- {!! $products->links() !!} --}}
                    </ul>
                </div>
            </div>
            {{-- {!! $products->links() !!} --}}
        </div>
    </section>
    <!-- shopping product area end -->

    <!-- shopping product area start -->
    <section class="shopping-product ptb-80" id="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="shopping-product-menu max-width-360">
                        <ul>
                            <li data-filter=".all" class="active">Bikes and spare parts</li>
                            {{-- <li data-filter=".new">New</li>
                            <li data-filter=".best">Best Sells</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row product-item">
                @foreach ($bikes as $product)
                    <div class="col-lg-3 col-sm-6 all">
                        <div class="sell-item max-width-360">
                            <div class="product-img">
                                <img src="/image/{{ $product->image }}" alt="{{ $product->name }}" height="300" style="height: 200px;">
                                <div class="product-img-overlay">
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                        <input type="hidden" value="{{ number_format($product->amount) }}" name="amount">
                                        <input type="hidden" value="{{ $product->image }}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <button class="krishok-btn">Add To Cart <i class="fa fa-shopping-cart"></i></button>
                                    </form>
                                </div>
                            </div>
                            <p><a href="/products/{{$product->id}}">{{ $product->name }}</a></p>
                            <h5>{{ number_format($product->amount) }}RWF</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="pagination">
                        {{-- <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="active"><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li> --}}
                        {{-- {!! $products->links() !!} --}}
                    </ul>
                </div>
            </div>
            {{-- {!! $products->links() !!} --}}
        </div>
    </section>
    <!-- shopping product area end -->

    <!-- shopping product area start -->
    <section class="shopping-product ptb-80" id="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="shopping-product-menu max-width-360">
                        <ul>
                            <li data-filter=".all" class="active">Other products</li>
                            {{-- <li data-filter=".new">New</li>
                            <li data-filter=".best">Best Sells</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row product-item">
                @foreach ($others as $product)
                    <div class="col-lg-3 col-sm-6 all">
                        <div class="sell-item max-width-360">
                            <div class="product-img">
                                <img src="/image/{{ $product->image }}" alt="{{ $product->name }}" height="300" style="height: 200px;">
                                <div class="product-img-overlay">
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                        <input type="hidden" value="{{ number_format($product->amount) }}" name="amount">
                                        <input type="hidden" value="{{ $product->image }}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        {{-- <button class="krishok-btn">Add To Cart <i class="fa fa-shopping-cart"></i></button> --}}
                                    </form>
                                </div>
                            </div>
                            <p><a href="/products/{{$product->id}}">{{ $product->name }}</a></p>
                            <h5>{{ number_format($product->amount) }}RWF</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <ul class="pagination">
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="active"><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </section><!-- shopping product area end -->

    <!-- product area start -->
    <section class="product ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title">
                        <h2>New Products</h2>
                        <p>Get latest uploaded products, by clicking on the product you can see full picture. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
                    <div class="tab-accordion pt-75">
                        <div class="tab-content">
                            @foreach ($new_products as $product)
                            <div id="menu{{ $product->id }}" @if ($product->id == $last_product->id) class="tab-pane fade active show" @else class="tab-pane fade" @endif>
                                <img src="/image/{{ $product->image }}" alt="{{ $product->name }}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-75">
                    <ul class="nav nav-tabs">
                        @foreach ($new_products as $product)
                        <li class="nav-item">
                            <a data-toggle="tab" href="#menu{{ $product->id }}" @if ($product->id == $last_product->id) class="active" @endif>
                                <div class="product-list">
                                    <div class="product-list-img">
                                        <img src="/image/{{ $product->image }}" alt="{{ $product->name }}">
                                    </div>
                                    <div class="product-list-info">
                                        <div class="product-list-info-table">
                                            <p>{{ $product->name }}</p>
                                            <h5>{{ number_format($product->amount) }}RWF</h5>
                                            <div class="product-list-icon">
                                                <i class="fa fa-shopping-cart"></i>
                                                <i class="fa fa-heart"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>@endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- product area end -->
    <!-- sell area start -->
    {{-- <section class="ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title">
                        <h2>Best Sells</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et  consectetur adipisicing eiusmod dolore magna aliqua. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sell-area owl-carousel">
                        @foreach ($products as $product )
                        <div class="sell-item">
                            <div class="product-img">
                                <img src="/image/{{ $product->image }}" alt="{{ $product->name }}">
                                <div class="product-img-overlay">
                                    <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <p><a href="product-details.html">{{ $product->name }}</a></p>
                            <h5>${{ $product->amount }}</h5>
                        </div>
                        @endforeach
                        <div class="sell-item">
                            <div class="product-img">
                                <img src="assets/img/main-product/2.jpg" alt="">
                                <div class="product-img-overlay">
                                    <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <p><a href="product-details.html">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- sell area end --> --}}
    

@endsection
		