@extends('web.layout')

@section('content')

<!-- hero area start -->
<section class="theme2 theme4 hero-area ptb-110" style="background-image: url({{ asset('images/service3.jpeg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="hero-area-content">
                    <h1 class="text-uppercase">Contact</h1>
                    <p>Do not hesitate to contact us for more information about our stock, technicians or riding trainers.</p>
                    <a href="#email-us" class="krishok-btn">Message here</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<!-- contact area start -->
<section class="ptb-80" id="email-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form">
                    <h4>Get in Touch</h4>
                    <form action="{{ route('messages.store') }}" method="POST">
                        @csrf
                        <input type="text" placeholder="Your Name" name="name" required value="{{ old('name') }}">
                        @error('name')
                        <span style="color:red">{{ $message }}</span>
                        @enderror
                        <input type="email" placeholder="Email Address" name="email" required value="{{ old('email') }}">
                        @error('email')
                        <span style="color:red">{{ $message }}</span>
                        @enderror
                        <textarea placeholder="Messege" name="message"></textarea>
                        @error('message')
                        <span style="color:red">{{ $message }}</span>
                        @enderror
                        <button class="krishok-btn">SEND</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <h4>Office Address</h4>
                    <div class="contact-area">
                        <p>Reach out to us by sending a message or use our physical location</p>
                        <p>We are open from 7am — 6pm week days.</p>
                        <p>6 KG 666 Street <br> Kigali, Rwanda</p>
                        <p>Email: kigaliride@gmail.com <br> Phone: +250 782215105/ +250 788875734</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- contact gallery area end -->
<!-- contact map area start -->
<section>
    <div class="container">
        <div class="row map-area">
            <div class="col-lg-12">
                <div class="sec-title pt-75">
                    <h3>Find us on maps</h3>
                    <p>You can also use our address from google map.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="google-map"></div> --}}
    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=nyabugogo&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
</section><!-- contact map area end -->

@endsection