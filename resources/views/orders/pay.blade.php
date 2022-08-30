@extends('web.layout')
@section('content')
    <!-- hero area start -->
    <section class="theme2 theme6 hero-area ptb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="hero-area-content">
                        <h1 class="text-uppercase">Checkout</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industr standard dummy text ever since when an unknown printer took a galley</p>
                        <a href="products.html" class="krishok-btn">Continue shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- hero area end -->
    <!-- checkout area start -->
    <section class="bg-color checkout-area ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form">
                        <h3>Shipping Address</h3>
                        <form action="{{ route('pay') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="First Name" name="fname">
                                    @error('fname')
                                    <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Last Name" name="lname">
                                    @error('lname')
                                    <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" placeholder="Email Address" name="email">
                                    @error('email')
                                    <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Phone Number" name="phone">
                                    @error('phone')
                                    <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="select-container">
                                        <select name="location">
                                            <option value="country">Kigali</option>
                                            <option value="bangladesh">Muhanga</option>
                                            <option value="india">Ruhango</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="select-container">
                                        <select>
                                            <option value="state">State</option>
                                            <option value="1500">1500</option>
                                            <option value="1589">1589</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" placeholder="amount to be paid" name="amount" value="{{ Cart::getTotal() }}">
                                    @error('amount')
                                    <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Zip or Postal Code">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Address Line 1">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" placeholder="Address Line 2 (Optional)">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Additional Instruction"></textarea>
                                </div>
                                <div class="col-lg-3 offset-lg-9 col-md-6 offset-md-6 mt-30">
                                    <button class="krishok-btn" type="submit">Payment Now <i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- checkout area end -->
@endsection