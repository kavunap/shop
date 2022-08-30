@extends('web.layout')
@section('content')

<!-- hero area start -->
<section class="theme2 hero-area ptb-80" style="background-image: url({{ asset('images/shop2.jpeg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="hero-area-content">
                    <h1>A Place of All Products and services</h1>
                    <p>Here you can find all products and services offered by Shimuhahe Digital shop</p>
                    <a href="#shop" class="krishok-btn">Shop Now <i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<!-- all product area start -->
<section class="all-product ptb-80" id="shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-dropdown max-width-360">
                    <div class="dropdowns-select">
                        <select>
                            <option value="Product">Select Product</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-dropdown max-width-360">
                    <div class="dropdowns-select">
                        <select>
                            <option value="Catagory">Select Catagory</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-dropdown max-width-360">
                    <div class="dropdowns-select">
                        <select>
                            <option value="Brand">Select Brand</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-dropdown max-width-360">
                    <div class="dropdowns-select">
                        <select>
                            <option value="Price">Price Rang</option>
                            <option value="Price1">$120 - $150</option>
                            <option value="Price2">$200 - $280</option>
                            <option value="Price3">$70 - $190</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <h1>Electronics</h1>
        <div class="row">
            @foreach ($electronics as $product)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="/image/{{ $product->image }}" alt="{{ $product->name }}" style="height: 200px;">
                            <div class="product-img-overlay">
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->amount }}" name="amount">
                                    <input type="hidden" value="{{ $product->image }}"  name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="krishok-btn">Add To Cart <i class="fa fa-shopping-cart"></i></button>
                                </form>
                                    
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="/products/{{$product->id}}"><h4>{{ $product->name }}</h4></a>
                            <p>{{ $product->address }}</p>
                            
                            <span class="price">Price: <strong>{{ number_format($product->amount) }} RWF</strong></span>
                            
                            <p>{{ visitor()->device() }}</p>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="pagination">
                    {{$electronics->links()}}
                </ul>
            </div>
        </div>
        <h1>Bikes</h1>
        <div class="row">
            @foreach ($bikes as $product)
                
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="/image/{{ $product->image }}" alt="{{ $product->name }}" style="height: 200px;">
                            <div class="product-img-overlay">
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->amount }}" name="amount">
                                    <input type="hidden" value="{{ $product->image }}"  name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="krishok-btn">Add To Cart <i class="fa fa-shopping-cart"></i></button>
                                </form>
                                    
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="/products/{{$product->id}}"><h4>{{ $product->name }}</h4></a>
                            <p>{{ $product->address }}</p>
                            <span class="price">Price: <strong>{{ number_format($product->amount) }} RWF</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination">
                   <div class="text-center card">{{ $bikes->links()}}</div> 
                </div>
            </div>
        </div>
        <h1>Others</h1>
        <div class="row">
            @foreach ($others as $product)
                
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="/image/{{ $product->image }}" alt="{{ $product->name }}" style="height: 200px;">
                            <div class="product-img-overlay">
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->amount }}" name="amount">
                                    <input type="hidden" value="{{ $product->image }}"  name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="krishok-btn">Add To Cart <i class="fa fa-shopping-cart"></i></button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="/products/{{$product->id}}"><h4>{{ $product->name }}</h4></a>
                            <p>{{ $product->address }}</p>
                            <span class="price">Price: <strong>{{ number_format($product->amount) }} RWF</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="product-tab">
                    <i class="fa fa-shopping-cart"></i>
                    <h4>Free Delivery in kigali</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-tab product-tab-2">
                    <i class="fa fa-thermometer-quarter"></i>
                    <h4>Quality Product</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-tab product-tab-3">
                    <i class="fa fa-thumbs-up"></i>
                    <h4>Money Back Guarantee</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title pt-75">
                    <h2>New Products</h2>
                    <p>New products added to this platform. </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($new_products as $product )
                
            <div class="col-lg-3 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="/image/{{ $product->image }}" alt="{{ $product->name }}" style="height: 200px;">
                            <div class="product-img-overlay">
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->amount }}" name="amount">
                                    <input type="hidden" value="{{ $product->image }}"  name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="krishok-btn">Add To Cart <i class="fa fa-shopping-cart"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="/products/{{$product->id}}"><h4>{{ $product->name }}</h4></a>
                            <p>{{ $product->address }}</p>
                            <span class="price">Price: <strong>{{ number_format($product->amount) }}RWF</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- all product area end -->

@endsection