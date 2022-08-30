@extends('web.layout')
@section('content')

    <!-- Sub banner start -->
    <div class="sub-banner" style="background-image: url({{ asset('images/house.jpeg') }}); height:300px">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Submit Property</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li class="active">Submit Property</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub banner end -->

    <!-- User page start -->
    <div class="user-page submit-property content-area-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    @if ($errors->any())
                    <div class="notification-box mb-50 text-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul class="text-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="search-area contact-2">
                        <div class="search-area-inner">
                            <div class="search-contents ">
                                <form method="POST" action="{{ route('properties.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <h3 class="heading-3">Basic Information</h3>
                                    <div class="row mb-30">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Property Title</label>
                                                <input type="text" name="p_title" class="form-control" placeholder="Property Title" value="{{ old('p_title') }}">
                                                @error('p_title')
                                                <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select class="form-control" name="p_type">
                                                <option value="Apartment" {{ old('p_type') == "Apartment" ? 'selected' : '' }}>Apartment</option>
                                                <option value="House" {{ old('p_type') == "House" ? 'selected' : '' }}>House</option>
                                                <option value="Commercial" {{ old('p_type') == "Commercial" ? 'selected' : '' }}>Commercial</option>
                                                <option value="Garage" {{ old('p_type') == "Garage" ? 'selected' : '' }}>Garage</option>
                                                <option value="Lot" {{ old('p_type') == "Lot" ? 'selected' : '' }}>Lot</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Sale/Rent</label>
                                                <select class="form-control" name="sell_type">
                                                <option value="For rent" {{ old('sell_type') == "For rent" ? 'selected' : '' }}>For rent</option>
                                                <option value="For sale" {{ old('sell_type') == "For sale" ? 'selected' : '' }}>For sale</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" name="p_price" class="form-control" placeholder="RWF" value="{{ old('p_price') }}" >
                                                @error('p_price')
                                                <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Area Size</label>
                                                <input type="number" name="p_size" class="form-control" placeholder="length in feet times width in feet (SqFt)" value="{{ old('p_size') }}">
                                                @error('p_size')
                                                <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Bedrooms</label>
                                                <select class="form-control" name="bed_rooms">
                                                <option value=1 {{ old('bed_rooms') == 1 ? 'selected' : '' }}>1</option>
                                                <option value=2 {{ old('bed_rooms') == 2 ? 'selected' : '' }}>2</option>
                                                <option value=2 {{ old('bed_rooms') == 3 ? 'selected' : '' }}>2</option>
                                                <option value=3 {{ old('bed_rooms') == 4 ? 'selected' : '' }}>3</option>
                                                <option value=4 {{ old('bed_rooms') == 5 ? 'selected' : '' }}>4</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Bathroom</label>
                                                <select class="form-control" name="bath_rooms">
                                                <option value=0 {{ old('bath_rooms') == 1 ? 'selected' : '' }}>0</option>
                                                <option value=1 {{ old('bath_rooms') == 2 ? 'selected' : '' }}>1</option>
                                                <option value=2 {{ old('bath_rooms') == 3 ? 'selected' : '' }}>2</option>
                                                <option value=3 {{ old('bath_rooms') == 4 ? 'selected' : '' }}>3</option>
                                                <option value=4 {{ old('bath_rooms') == 5 ? 'selected' : '' }}>4</option>
                                                <option value=5 {{ old('bath_rooms') == 6 ? 'selected' : '' }}>5</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                     <h3 class="heading-3">Property Gallery</h3>
                                    {{--<div class="row mb-45">
                                        <div class="col-lg-12">
                                            <div id="myDropZone" class="dropzone dropzone-design">
                                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="sliderList">
                                        <div class="input-group control-group dz-default dz-message " >
                                            <input type="file" name="imageName[]" class="myfrm form-control" accept=".jpeg, .png, .gif, .jpg, .tiff"><br>
                                            @error('imageName[]')
                                            <span style="color:red">{{ $message }}</span>
                                            @enderror
                                            <div class="input-group-btn">
                                                <button class="btn btn-success addMoreSlider" type="button">Add More</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clone d-none">
                                        <div class="control-group input-group phpicoder" style="margin-top:5px">
                                            <input type="file" name="imageName[]" class="myfrm form-control">
                                            <div class="input-group-btn"> 
                                                <button class="btn btn-danger removeSliderImage" type="button">Remove</button>
                                            </div>
                                        </div>
                                    </div>
    
                                    <h3 class="heading-3">Location</h3>
                                    <div class="row mb-30">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <select class="form-control" name="city">
                                                <option value="Kigali" {{ (old('city') == 'Kigali') ? 'selected' : ''}}>Kigali</option>
                                                <option value="Muhanga" {{ (old('city') == 'Muhanga') ? 'selected' : ''}}>Muhanga</option>
                                                <option value="Musanze" {{ (old('city') == 'Musanze') ? 'selected' : ''}}>Musanze</option>
                                                <option value="Butare" {{ (old('city') == 'Butare') ? 'selected' : ''}}>Butare</option>
                                                <option value="Nyanza" {{ (old('city') == 'Nyanza') ? 'selected' : ''}}>Nyanza</option>
                                                <option value="Rwamagana" {{ (old('city') == 'Rwamagana') ? 'selected' : ''}}>Rwamagana</option>
                                                <option value="Kayonza" {{ (old('city') == 'Kayonza') ? 'selected' : ''}}>Kayonza</option>
                                                <option value="Gisenyi" {{ (old('city') == 'Gisenyi') ? 'selected' : ''}}>Gisenyi</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="text" name="postal_code" class="form-control" placeholder="Postal Code">
                                                @error('postal_code')
                                                <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="heading-3">Detailed Information</h3>
                                    <div class="row mb-30">
                                        <div class="col-lg-12">
                                            <div class="form-group message">
                                                <label>Description of the property</label>
                                                <textarea class="form-control" name="message" placeholder="Detailed Information"></textarea>
                                                @error('message')
                                                <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <label>Building Age (optional)</label>
                                                <select class="form-control" name="building_age">
                                                <option value="0-5 Years" {{ (old('building_age') == '0-5 Years') ? 'selected' : ''}}>0-5 Years</option>
                                                <option value="0-10 Years" {{ (old('building_age') == '0-10 Years') ? 'selected' : ''}}>0-10 Years</option>
                                                <option value="0-15 Years" {{ (old('building_age') == '0-15 Years') ? 'selected' : ''}}>0-15 Years</option>
                                                <option value="0-20 Years" {{ (old('building_age') == '0-20 Years') ? 'selected' : ''}}>0-20 Years</option>
                                                <option value="0-25 Years" {{ (old('building_age') == '0-25 Years') ? 'selected' : ''}}>0-25 Years</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>


                                    <h3 class="heading-3">Other Features</h3>
                                    <div class="row mb-30">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Swimming Pool</label>
                                                <select class="form-control" name="swimming">
                                                <option value=0 {{ (old('swimming') == 1) ? 'selected' : ''}}>0</option>
                                                <option value=1 {{ (old('swimming') == 2) ? 'selected' : ''}}>1</option>
                                                <option value=2 {{ (old('swimming') == 3) ? 'selected' : ''}}>2</option>
                                                <option value=3 {{ (old('swimming') == 4) ? 'selected' : ''}}>3</option>
                                                <option value=4 {{ (old('swimming') == 5) ? 'selected' : ''}}>4</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div lass="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Laundry Room</label>
                                                <select class="form-control" name="laundry">
                                                    <option value=0 {{ (old('laundry') == 1) ? 'selected' : ''}}>0</option>
                                                    <option value=1 {{ (old('laundry') == 2) ? 'selected' : ''}}>1</option>
                                                    <option value=2 {{ (old('laundry') == 3) ? 'selected' : ''}}>2</option>
                                                    <option value=3 {{ (old('laundry') == 4) ? 'selected' : ''}}>3</option>
                                                    <option value=4 {{ (old('laundry') == 5) ? 'selected' : ''}}>4</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Places to seat</label>
                                                <select class="form-control" name="seat">
                                                    <option value=0 {{ (old('seat') == 1) ? 'selected' : ''}}>0</option>
                                                    <option value=1 {{ (old('seat') == 2) ? 'selected' : ''}}>1</option>
                                                    <option value=2 {{ (old('seat') == 3) ? 'selected' : ''}}>2</option>
                                                    <option value=3 {{ (old('seat') == 4) ? 'selected' : ''}}>3</option>
                                                    <option value=4 {{ (old('seat') == 5) ? 'selected' : ''}}>4</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Alarm</label>
                                                <select class="form-control" name="alarm">
                                                    <option value=0 {{ (old('alarm') == 1) ? 'selected' : ''}}>0</option>
                                                    <option value=1 {{ (old('alarm') == 2) ? 'selected' : ''}}>1</option>
                                                    <option value=2 {{ (old('alarm') == 3) ? 'selected' : ''}}>2</option>
                                                    <option value=3 {{ (old('alarm') == 4) ? 'selected' : ''}}>3</option>
                                                    <option value=4 {{ (old('alarm') == 5) ? 'selected' : ''}}>4</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Central Heating</label>
                                                <select class="form-control" name="heat">
                                                    <option value=0 {{ (old('heat') == 1) ? 'selected' : ''}}>0</option>
                                                    <option value=1 {{ (old('heat') == 2) ? 'selected' : ''}}>1</option>
                                                    <option value=2 {{ (old('heat') == 3) ? 'selected' : ''}}>2</option>
                                                    <option value=3 {{ (old('heat') == 4) ? 'selected' : ''}}>3</option>
                                                    <option value=4 {{ (old('heat') == 5) ? 'selected' : ''}}>4</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Parking</label>
                                                <select class="form-control" name="parking">
                                                    <option value=0 {{ (old('parking') == 1) ? 'selected' : ''}}>0</option>
                                                    <option value=1 {{ (old('parking') == 2) ? 'selected' : ''}}>1</option>
                                                    <option value=2 {{ (old('parking') == 3) ? 'selected' : ''}}>2</option>
                                                    <option value=3 {{ (old('parking') == 4) ? 'selected' : ''}}>3</option>
                                                    <option value=4 {{ (old('parking') == 5) ? 'selected' : ''}}>4</option>
                                            </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Windows covers</label>
                                                <select class="form-control" name="win_cover">
                                                    <option value=0 {{ (old('win_cover') == 1) ? 'selected' : ''}}>0</option>
                                                    <option value=1 {{ (old('win_cover') == 2) ? 'selected' : ''}}>1</option>
                                                    <option value=2 {{ (old('win_cover') == 3) ? 'selected' : ''}}>2</option>
                                                    <option value=3 {{ (old('win_cover') == 4) ? 'selected' : ''}}>3</option>
                                                    <option value=4 {{ (old('win_cover') == 5) ? 'selected' : ''}}>4</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label>Air Condition</label>
                                                <select class="form-control" name="air_cond">
                                                    <option value=0 {{ (old('air_cond') == 1) ? 'selected' : ''}}>0</option>
                                                    <option value=1 {{ (old('air_cond') == 2) ? 'selected' : ''}}>1</option>
                                                    <option value=2 {{ (old('air_cond') == 3) ? 'selected' : ''}}>2</option>
                                                    <option value=3 {{ (old('air_cond') == 4) ? 'selected' : ''}}>3</option>
                                                    <option value=4 {{ (old('air_cond') == 5) ? 'selected' : ''}}>4</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                    <h3 class="heading-3">Contact Details</h3>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                                @error('name')
                                                <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                                @error('email')
                                                <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}" >
                                                @error('phone')
                                                <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            {{-- <a href="#" class="btn btn-md btn-color">Preview</a> --}}
                                            <button type="submit" class="krishok-btn">Save</button>
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
    <!-- User page end -->
@endsection