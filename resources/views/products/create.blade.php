@extends('web.layout')
@section('content')
    <!-- hero area start -->
    <section class="theme2 theme4 hero-area ptb-110" style="background-image: url({{ asset('images/ride.jpeg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="hero-area-content">
                        <h1 class="text-uppercase">Add new Product </h1>
                        <p>Use the form below to upload you product</p>
                        <a href="#email-us" class="krishok-btn">Fill the form</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- hero area end -->
    <!-- contact area start -->
    <section class="ptb-80" id="email-us">
        <div class="container">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
                
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h4>New product</h4>
                        
                            <input type="text" placeholder="Product Name" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span style="color:red">{{ $message }}</span>
                            @enderror
                            <select name="size" id="size">
                                <option value="">Select Size</option>
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                            </select>
                            {!! Form::Label('category_id', 'Select Category:') !!}
                            {!! Form::select('category_id', $categories, null, ['class' => '']) !!}
                            <input type="number" placeholder="Product price in RWF" name="amount" value="{{ old('amount') }}">
                            @error('amount')
                            <span style="color:red">{{ $message }}</span>
                            @enderror
                            <input type="file" placeholder="select image" name="image" value="{{ old('image') }}" accept=".jpeg, .png, .gif, .jpg, .tiff">
                            @error('image')
                            <span style="color:red">{{ $message }}</span>
                            @enderror
                            {{-- <input type="number" placeholder="If the discount is applicable" name="discount" value="{{ old('discount') }}"> --}}
                            <button class="krishok-btn" type="submit">SEND</button>
                            
                       
                    </div>
                </div>
                <div class="col-lg-6">
                    <br><br><br>
                    <div class="contact-form">
                        <input type="text" placeholder="Enter the product location" name="address" value="{{ old('address') }}" required>
                            <p>is the product available?:</p>
                            <div class="form-inline">
                                <div>
                                    <input type="radio" id="available" name="available" value=1 checked>
                                    <label for="available">Yes</label>
                                </div>
                                &emsp;&emsp;&emsp;&emsp;
                                <div>
                                    <input type="radio" id="available" name="available" value=0 >
                                    <label for="available">No</label>
                                </div>
                            </div>
                            <textarea placeholder="Product details" name="description"></textarea>
                            @error('description')
                            <span style="color:red">{{ $message }}</span>
                            @enderror
                        
                    </div>
                </div>
            
            </div>
        </form>
        </div>
    </section><!-- contact gallery area end -->
    <!-- contact map area start -->
@endsection


