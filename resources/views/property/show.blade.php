@extends('layouts.app')

@section('template_title')
    {{ $property->name ?? 'Show Property' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Property</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('properties.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>P Title:</strong>
                            {{ $property->p_title }}
                        </div>
                        <div class="form-group">
                            <strong>P Type:</strong>
                            {{ $property->p_type }}
                        </div>
                        <div class="form-group">
                            <strong>P Size:</strong>
                            {{ $property->p_size }}
                        </div>
                        <div class="form-group">
                            <strong>Bed Rooms:</strong>
                            {{ $property->bed_rooms }}
                        </div>
                        <div class="form-group">
                            <strong>Bath Rooms:</strong>
                            {{ $property->bath_rooms }}
                        </div>
                        <div class="form-group">
                            <strong>Imagename:</strong>
                            {{ $property->imageName }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $property->address }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $property->city }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $property->state }}
                        </div>
                        <div class="form-group">
                            <strong>Postal Code:</strong>
                            {{ $property->postal_code }}
                        </div>
                        <div class="form-group">
                            <strong>Air Cond:</strong>
                            {{ $property->air_cond }}
                        </div>
                        <div class="form-group">
                            <strong>Parking:</strong>
                            {{ $property->parking }}
                        </div>
                        <div class="form-group">
                            <strong>Swimming:</strong>
                            {{ $property->swimming }}
                        </div>
                        <div class="form-group">
                            <strong>Seat:</strong>
                            {{ $property->seat }}
                        </div>
                        <div class="form-group">
                            <strong>Alarm:</strong>
                            {{ $property->alarm }}
                        </div>
                        <div class="form-group">
                            <strong>Heat:</strong>
                            {{ $property->heat }}
                        </div>
                        <div class="form-group">
                            <strong>Laundry:</strong>
                            {{ $property->laundry }}
                        </div>
                        <div class="form-group">
                            <strong>Win Cover:</strong>
                            {{ $property->win_cover }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $property->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $property->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $property->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Message:</strong>
                            {{ $property->message }}
                        </div>
                        <div class="form-group">
                            <strong>Building Age:</strong>
                            {{ $property->building_age }}
                        </div>
                        <div class="form-group">
                            <strong>Sell Type:</strong>
                            {{ $property->sell_type }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $property->status }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $property->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $property->category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
