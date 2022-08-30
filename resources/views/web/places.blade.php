@extends('web.layout')

@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif
  
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif
<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active item-bg">
                <img class="d-block w-100 h-100" src="{{ asset('images/house.jpeg') }}" alt="house in rwanda">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner">
                        <div class="tab-search-section">
                            <h1>Find Your Dream Properties</h1>
                            <div id="typed-strings">
                                <p>Find new & featured property located in your local area.</p>
                            </div>
                            <h1 class="typed-text tt2">&nbsp;
                                <span id="typed"></span>
                            </h1>
                            <div class="tab-box">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show">
                                        <div class="search-area search-area-6">
                                            <div class="search-area-inner">
                                                <div class="search-contents">
                                                    <form method="GET">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <input type="text" name="name" class="form-control" placeholder="Enter Keyword">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <select class="form-control" name="type">
                                                                        <option>Property Types</option>
                                                                        <option>Residential</option>
                                                                        <option>Commercial</option>
                                                                        <option>Land</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <select class="form-control" name="location">
                                                                        <option>Location</option>
                                                                        <option>Nyarugenge</option>
                                                                        <option>Kicukiro</option>
                                                                        <option>Gasabo</option>
                                                                        <option>Kimironko</option>
                                                                        <option>Kanombe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                <div class="form-group">
                                                                    <select class="form-control" name="rooms">
                                                                        <option>Room</option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 cp3">
                                                                <div class="form-group fg2">
                                                                    <button class="btn btn-success">Search</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- Featured properties start -->
{{-- <div class="featured-properties content-area-7">
    <div class="container-fluid">
        <div class="main-title">
            <h1>Featured Properties</h1>
            <p>Properties for rent and for sale in Rwanda.</p>
        </div>
        <div class="row slick-fullwidth wow fadeInUp delay-04s">
            @foreach ($properties as $property )
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                </div>
                                <div class="tag-for">{{ $property->sell_type }}</div>
                                <div class="plan-price"><sup>RWF</sup>{{ $property->p_price }})<span>/month</span> </div>
                                <img src="/propertyImages/{{ $property->imageName[0] }}" alt="{{ $property->p_title }}" class="img-fluid">
                            </a>
                            <div class="property-overlay">
                                <a href="properties-details.html" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Test Title">
                                    <i class="fa fa-video-camera"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="http://placehold.it/750x540" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                    <a href="http://placehold.it/750x540" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">{{ $property->p_title }}</a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>{{ $property->address }},
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> 3 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i> Sq Ft:3400
                                </li>
                                <li>
                                    <i class="flaticon-car-repair"></i> 1 Garage
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="#">
                                <i class="fa fa-user"></i> Jhon Doe
                            </a>
                            <span>
                                <i class="fa fa-calendar-o"></i> 2 years ago
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div> --}}
<!-- Featured properties end -->

<!-- services 3 start -->
{{-- <div class="services-3 content-area-20 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>What Are you Looking For?</h1>
            <p>Houses, Plots, Vehicles and much more are all you can find here easily.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="services-info-3">
                    <i class="flaticon-hotel-building"></i>
                    <h5>Apartments Clean</h5>
                    <p>Apartments in all parts of Rwanda for rent and for sale</p>
                    <a href="services.html" class="read-more">Read more...</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="services-info-3">
                    <i class="flaticon-house"></i>
                    <h5>Houses</h5>
                    <p>Houses in all parts of Rwanda for rent and for sale</p>
                    <a href="services.html" class="read-more">Read more...</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInDown delay-04s">
                <div class="services-info-3">
                    <i class="flaticon-call-center-agent"></i>
                    <h5>Support 24/7</h5>
                    <p>Don't hesitate to contact us any time</p>
                    <a href="services.html" class="read-more">Read more...</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="services-info-3">
                    <img src="{{ asset('images/car.png') }}" class="small-icon" style="width: 80px; height: 80px">
                    <h5>Vehicles</h5>
                    <p>Cars, Motos, Scooters, and bikes for rent and for sale</p>
                    <a href="services.html" class="read-more">Read more...</a>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-lg btn-theme">More Details</a>
            </div>
        </div>
    </div>
</div> --}}
<!-- services 3 end -->

<!-- Recent Properties start -->
<div class="recent-properties content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Recent Properties</h1>
            <p>Recently posted properties.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInLeft delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="{{ asset('images/house.jpeg') }}" alt="property-8" class="img-fluid">
                        <div class="tag-for">For Rent</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Real Luxury Villa</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="http://placehold.it/255x170" alt="property-8" class="img-fluid">
                        <div class="tag-for">For Rent</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Masons Villas</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="http://placehold.it/255x170" alt="property-8" class="img-fluid">
                        <div class="tag-for">For Sale</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Luxury Villa</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInRight delay-04s">
                <div class="property-box-8">
                    <div class="property-photo">
                        <img src="http://placehold.it/255x170" alt="property-8" class="img-fluid">
                        <div class="tag-for">For Rent</div>
                        <div class="price-ratings-box">
                            <p class="price">
                                $178,000
                            </p>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="heading">
                            <h3>
                                <a href="properties-details.html">Park avenue</a>
                            </h3>
                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                </a>
                            </div>
                        </div>
                        <div class="properties-listing">
                            <span>3 Beds</span>
                            <span>2 Baths</span>
                            <span>980 sqft</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recent Properties end -->

<!-- Most popular places start -->
<div class="most-popular-places content-area-3">
    <div class="container">
        <div class="main-title">
            <h1>Most Popular Places</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-pad wow fadeInLeft delay-04s">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="overview overview-box">
                                <img src="http://placehold.it/354x354" alt="popular-places">
                                <div class="mask align-self-center">
                                    <div class="info">
                                        <div class="ds">
                                            <h2>Rome</h2>
                                            <div class="clearfix"></div>
                                            <p>14 Properties</p>
                                            <div class="clearfix"></div>
                                            <a href="properties-details.html" class="btn btn-border">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="overview overview-box">
                                <img src="http://placehold.it/354x354" alt="popular-places">
                                <div class="mask">
                                    <div class="info">
                                        <div class="ds">
                                            <h2>California</h2>
                                            <p>201 Properties</p>
                                            <a href="properties-details.html" class="btn btn-border">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-pad cp-3 wow fadeInUp delay-04s d-none-992">
                    <div class="overview aa overview-box">
                        <img src="http://placehold.it/354x723" alt="popular-places" class="big-img">
                        <div class="mask">
                            <div class="info-2">
                                <div class="ds">
                                    <h2>Tokyo</h2>
                                    <p>72 Properties</p>
                                    <a href="properties-details.html" class="btn btn-border">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-pad wow fadeInRight delay-04s">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="overview overview-box">
                                <img src="http://placehold.it/354x354" alt="popular-places">
                                <div class="mask">
                                    <div class="info">
                                        <div class="ds">
                                            <h2>Paris</h2>
                                            <p>14 Properties</p>
                                            <a href="properties-details.html" class="btn btn-border">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="overview overview-box">
                                <img src="http://placehold.it/354x354" alt="popular-places">
                                <div class="mask">
                                    <div class="info">
                                        <div class="ds">
                                            <h2>London</h2>
                                            <p>201 Properties</p>
                                            <a href="properties-details.html" class="btn btn-border">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our newslatters end -->
@endsection