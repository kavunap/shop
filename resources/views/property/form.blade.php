<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('p_title') }}
            {{ Form::text('p_title', $property->p_title, ['class' => 'form-control' . ($errors->has('p_title') ? ' is-invalid' : ''), 'placeholder' => 'P Title']) }}
            {!! $errors->first('p_title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('p_type') }}
            {{ Form::text('p_type', $property->p_type, ['class' => 'form-control' . ($errors->has('p_type') ? ' is-invalid' : ''), 'placeholder' => 'P Type']) }}
            {!! $errors->first('p_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('p_size') }}
            {{ Form::text('p_size', $property->p_size, ['class' => 'form-control' . ($errors->has('p_size') ? ' is-invalid' : ''), 'placeholder' => 'P Size']) }}
            {!! $errors->first('p_size', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bed_rooms') }}
            {{ Form::text('bed_rooms', $property->bed_rooms, ['class' => 'form-control' . ($errors->has('bed_rooms') ? ' is-invalid' : ''), 'placeholder' => 'Bed Rooms']) }}
            {!! $errors->first('bed_rooms', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bath_rooms') }}
            {{ Form::text('bath_rooms', $property->bath_rooms, ['class' => 'form-control' . ($errors->has('bath_rooms') ? ' is-invalid' : ''), 'placeholder' => 'Bath Rooms']) }}
            {!! $errors->first('bath_rooms', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imageName') }}
            {{ Form::text('imageName', $property->imageName, ['class' => 'form-control' . ($errors->has('imageName') ? ' is-invalid' : ''), 'placeholder' => 'Imagename']) }}
            {!! $errors->first('imageName', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $property->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('city') }}
            {{ Form::text('city', $property->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('city', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('state') }}
            {{ Form::text('state', $property->state, ['class' => 'form-control' . ($errors->has('state') ? ' is-invalid' : ''), 'placeholder' => 'State']) }}
            {!! $errors->first('state', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('postal_code') }}
            {{ Form::text('postal_code', $property->postal_code, ['class' => 'form-control' . ($errors->has('postal_code') ? ' is-invalid' : ''), 'placeholder' => 'Postal Code']) }}
            {!! $errors->first('postal_code', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('air_cond') }}
            {{ Form::text('air_cond', $property->air_cond, ['class' => 'form-control' . ($errors->has('air_cond') ? ' is-invalid' : ''), 'placeholder' => 'Air Cond']) }}
            {!! $errors->first('air_cond', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parking') }}
            {{ Form::text('parking', $property->parking, ['class' => 'form-control' . ($errors->has('parking') ? ' is-invalid' : ''), 'placeholder' => 'Parking']) }}
            {!! $errors->first('parking', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('swimming') }}
            {{ Form::text('swimming', $property->swimming, ['class' => 'form-control' . ($errors->has('swimming') ? ' is-invalid' : ''), 'placeholder' => 'Swimming']) }}
            {!! $errors->first('swimming', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('seat') }}
            {{ Form::text('seat', $property->seat, ['class' => 'form-control' . ($errors->has('seat') ? ' is-invalid' : ''), 'placeholder' => 'Seat']) }}
            {!! $errors->first('seat', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alarm') }}
            {{ Form::text('alarm', $property->alarm, ['class' => 'form-control' . ($errors->has('alarm') ? ' is-invalid' : ''), 'placeholder' => 'Alarm']) }}
            {!! $errors->first('alarm', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('heat') }}
            {{ Form::text('heat', $property->heat, ['class' => 'form-control' . ($errors->has('heat') ? ' is-invalid' : ''), 'placeholder' => 'Heat']) }}
            {!! $errors->first('heat', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('laundry') }}
            {{ Form::text('laundry', $property->laundry, ['class' => 'form-control' . ($errors->has('laundry') ? ' is-invalid' : ''), 'placeholder' => 'Laundry']) }}
            {!! $errors->first('laundry', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('win_cover') }}
            {{ Form::text('win_cover', $property->win_cover, ['class' => 'form-control' . ($errors->has('win_cover') ? ' is-invalid' : ''), 'placeholder' => 'Win Cover']) }}
            {!! $errors->first('win_cover', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $property->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $property->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $property->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('message') }}
            {{ Form::text('message', $property->message, ['class' => 'form-control' . ($errors->has('message') ? ' is-invalid' : ''), 'placeholder' => 'Message']) }}
            {!! $errors->first('message', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('building_age') }}
            {{ Form::text('building_age', $property->building_age, ['class' => 'form-control' . ($errors->has('building_age') ? ' is-invalid' : ''), 'placeholder' => 'Building Age']) }}
            {!! $errors->first('building_age', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sell_type') }}
            {{ Form::text('sell_type', $property->sell_type, ['class' => 'form-control' . ($errors->has('sell_type') ? ' is-invalid' : ''), 'placeholder' => 'Sell Type']) }}
            {!! $errors->first('sell_type', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $property->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $property->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('category_id') }}
            {{ Form::text('category_id', $property->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>