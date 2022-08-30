@extends('admin.layout')

@section('template_title')
    Property
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Property') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('properties.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>P Title</th>
										<th>P Type</th>
										<th>P Size</th>
										<th>Bed Rooms</th>
										<th>Bath Rooms</th>
										<th>Imagename</th>
										<th>Address</th>
										<th>City</th>
										<th>State</th>
										<th>Postal Code</th>
										<th>Air Cond</th>
										<th>Parking</th>
										<th>Swimming</th>
										<th>Seat</th>
										<th>Alarm</th>
										<th>Heat</th>
										<th>Laundry</th>
										<th>Win Cover</th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Message</th>
										<th>Building Age</th>
										<th>Sell Type</th>
										<th>Status</th>
										<th>User Id</th>
										<th>Category Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($properties as $property)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $property->p_title }}</td>
											<td>{{ $property->p_type }}</td>
											<td>{{ $property->p_size }}</td>
											<td>{{ $property->bed_rooms }}</td>
											<td>{{ $property->bath_rooms }}</td>
											<td>{{ $property->imageName }}</td>
											<td>{{ $property->address }}</td>
											<td>{{ $property->city }}</td>
											<td>{{ $property->state }}</td>
											<td>{{ $property->postal_code }}</td>
											<td>{{ $property->air_cond }}</td>
											<td>{{ $property->parking }}</td>
											<td>{{ $property->swimming }}</td>
											<td>{{ $property->seat }}</td>
											<td>{{ $property->alarm }}</td>
											<td>{{ $property->heat }}</td>
											<td>{{ $property->laundry }}</td>
											<td>{{ $property->win_cover }}</td>
											<td>{{ $property->name }}</td>
											<td>{{ $property->email }}</td>
											<td>{{ $property->phone }}</td>
											<td>{{ $property->message }}</td>
											<td>{{ $property->building_age }}</td>
											<td>{{ $property->sell_type }}</td>
											<td>{{ $property->status }}</td>
											<td>{{ $property->user_id }}</td>
											<td>{{ $property->category_id }}</td>

                                            <td>
                                                <form action="{{ route('properties.destroy',$property->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('properties.show',$property->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('properties.edit',$property->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $properties->links() !!}
            </div>
        </div>
    </div>
@endsection
