@extends('web.layout')

@section('content')

<!-- hero area start -->
<section class="hero-area theme-3 ptb-80">
    <div class="hero-area-theme-3 theme-3_1"></div>
    <div class="hero-area-theme-3 theme-3_2"></div>
    <div class="hero-area-theme-3 theme-3_3"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-10">
                <div class="hero-area-content ptb-80">
                    <h1>We All bicycle services</h1>
                    <p>We have best bikes for you for sale and for rent at a very low price. We also provide repairing services with our experienced techiniciansas well as bike riding skills for kids and other people.</p>
                    <a href="/products" class="krishok-btn">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<!-- about area start -->
<h1 class="text-center pt-5">Our services</h1>
<section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-area-content">
                    <img src="{{ asset('images/shop2.jpeg') }}" alt="bike shop in rwanda kigali ride">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-area-content">
                    <h2>Shop</h2>
                    <p>We have a big store of bikes where your choose yours at a very low price.</p>
                    <p>From 70,000 RWF you can get a sport bike, road bike or mountain bike for kids, adult and other people.</p>
                    <a href="/products" class="krishok-btn">Get yours</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-area-content">
                    <h2>Bike repairing services and spare parts</h2>
                    <p>We have experienced technicians who are able to fix all easy and complex issues of your bike. We also have all kind of spare parts and bike accessories.</p>
                    <p>Get better services and products from Kigali Ride, all bike riding services.</p>
                    <a href="/contact" class="krishok-btn">Contact us</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-area-content">
                    <img src="{{ asset('images/repair.jpeg') }}" alt="bike shop in rwanda kigali ride">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-area-content">
                    <img src="{{ asset('images/kids.jpeg') }}" alt="bike shop in rwanda kigali ride">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-area-content">
                    <h2>Riding skills</h2>
                    <p>Riding skills is a very important in human life as it a part of sport practiced by all people in the world. We train kids and other people with riding skills.</p>
                    <p>.</p>
                    <a href="/contact" class="krishok-btn">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about area end -->
<!-- testimonial area start -->
{{-- <section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2>Client Feedback</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-30">
                <div class="testimonial-slide owl-carousel">
                    <div class="single-testimonial-box">
                        <div class="testimonial-box-img">
                           <img src="assets/img/testimonial1.png" alt="testimonial-box">
                        </div>
                        <h5>Alex Donne Ranjon</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and type settin the readable content of a page in when the readable content of a page in when looking.</p>
                        <div class="review-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="testimonial-box-img">
                           <img src="assets/img/testimonial2.png" alt="testimonial-box">
                        </div>
                        <h5>Simraan Jantus</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and type settin the readable content of a page in when the readable content of a page in when looking.</p>
                        <div class="review-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="testimonial-box-img">
                           <img src="assets/img/testimonial1.png" alt="testimonial-box">
                        </div>
                        <h5>Alex Donne Ranjon</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and type settin the readable content of a page in when the readable content of a page in when looking.</p>
                        <div class="review-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="testimonial-box-img">
                           <img src="assets/img/testimonial2.png" alt="testimonial-box">
                        </div>
                        <h5>Simraan Jantus</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and type settin the readable content of a page in when the readable content of a page in when looking.</p>
                        <div class="review-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="testimonial-box-img">
                           <img src="assets/img/testimonial1.png" alt="testimonial-box">
                        </div>
                        <h5>Alex Donne Ranjon</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and type settin the readable content of a page in when the readable content of a page in when looking.</p>
                        <div class="review-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="testimonial-box-img">
                           <img src="assets/img/testimonial2.png" alt="testimonial-box">
                        </div>
                        <h5>Simraan Jantus</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and type settin the readable content of a page in when the readable content of a page in when looking.</p>
                        <div class="review-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- testimonial area end --> --}}

@endsection