@extends('web.layout')

@section('content')

<!-- product detail area start -->
<section class="product pt-75">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <div class="carousel-inner">
                        <div class="item active carousel-item">
                            <div class="item-carousel-wrap zoom" data-zoom="/image/{{ $product->image }}">
                                <img src="/image/{{ $product->image }}" alt="{{ $product->name }}">
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        @foreach ($related as $rel )
                        <li data-target="#quote-carousel" data-slide-to="0">
                            <img src="/image/{{ $product->image }}" alt="{{ $rel->name }}">
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div class="col-md-7">
                <div class="product-details-content pb-75">
                    <div class="product-details-left">
                        <div class="product-details-title">
                            <h3>{{ $product->name }}</h3>
                        </div>
                        <div class="product-details-price">
                            <p> {{ number_format($product->amount) }} RWF<del>(20% off)</del></p>
                        </div>
                        <div class="review-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-details-category">
                            <p>In Stock</p>
                        </div>
                    </div>
                    <div class="product-icon">
                        <a href="#"><i class="fa fa-heart-o"></i></a>
                        <a href="#"><i class="fa fa-share-alt"></i></a>
                    </div>
                    <div class="product-details-btn">
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->name }}" name="name">
                            <input type="hidden" value="{{ $product->amount }}" name="amount">
                            <input type="hidden" value="{{ $product->image }}"  name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="krishok-btn">Add To Cart <i class="fa fa-shopping-cart"></i></button>
                        </form>
                        {{-- <a href="#" class="krishok-btn krishok-btn-transparent">Add to List <i class="fa fa-heart-o"></i></a> --}}
                    </div>
                    <div class="product-details-descrip">
                        <h3>Description</h3>
                        <p>{{ $product->description }}.</p>
                        <a href="#" class="review-btn">write a review</a>
                        <form action="#" class="product-details-form">
                            <input type="text" placeholder="Write your review"/>
                            <div class="dropdowns-select">
                                <select>
                                    <option value="5 star">5 star</option>
                                    <option value="4 star">4 star</option>
                                    <option value="3 star">3 star</option>
                                    <option value="2 star">2 star</option>
                                    <option value="1 star">1 star</option>
                                </select>
                            </div>
                            <button class="krishok-btn">Send Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- product detail area end -->
<!-- sell area start -->
<section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title mb-30">
                    <h2>Similar Products</h2>
                    <p>Here are similar products to your the above. </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($related as $rel)
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="/image/{{ $rel->image }}" alt="{{ $rel->name }}">
                        <div class="product-img-overlay">
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $rel->id }}" name="id">
                                <input type="hidden" value="{{ $rel->name }}" name="name">
                                <input type="hidden" value="{{ $rel->amount }}" name="amount">
                                <input type="hidden" value="{{ $rel->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="krishok-btn">Add To Cart <i class="fa fa-shopping-cart"></i></button>
                            </form>
                        </div>
                    </div>
                    <p><a href="/products/{{ $product->id }}">{{ $rel->name }}</a></p>
                    <h5>{{ number_format($rel->amount) }} RWF</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- sell area end -->
<!-- shopping product area start -->
{{-- <section class="product shopping-product ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title mb-30">
                    <h2>Recently Viewed</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et  consectetur adipisicing eiusmod dolore magna aliqua. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="assets/img/main-product/8.jpg" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="product-details.html">Product Name</a></p>
                    <h5>$50.00</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="assets/img/main-product/9.jpg" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="product-details.html">Product Name</a></p>
                    <h5>$50.00</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="assets/img/main-product/5.jpg" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="product-details.html">Product Name</a></p>
                    <h5>$50.00</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="assets/img/main-product/10.jpg" alt="">
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
</section><!-- shopping product area end --> --}}

@endsection