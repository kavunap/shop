<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

/**
 * Class PropertyController
 * @package App\Http\Controllers
 */
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::paginate();

        return view('property.index', compact('properties'))
            ->with('i', (request()->input('page', 1) - 1) * $properties->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $property = new Property();
        return view('property.create', compact('property'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate(Property::$rules);

        // $property = Property::create($request->all());

        // return redirect()->route('properties.index')
        //     ->with('success', 'Property created successfully.');
        $this->validate($request, [
            'p_title' => 'required',
            'p_type' => 'required',
            'p_price' => 'required',
            'p_size' => 'required',
            'bed_rooms' => 'required',
            'bath_rooms' => 'required',
            'address' => 'required',
            'city' => 'required',
            'sell_type'=>'required',
            // 'imageName'=>'required',
            'imageName.*' => 'image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);
        $input = $request->all();
        $propertyImages = [];
        if($request->hasfile('imageName'))
        {
            foreach($request->file('imageName') as $img)
            {
                $name = time().rand(1,100).'.'.$img->extension();
                $img->move(public_path('propertyImages'), $name);
                $propertyImages[] = $name;
            }
        }

        // $request['imageName'] = $propertyImages;
        // $request['user_id'] = auth()->user()->id;
        // Property::create($input);
        $property = new Property();
        $property->p_title = $request->p_title;
        $property->p_type = $request->p_type;
        $property->p_size = $request->p_size;
        $property->bed_rooms = $request->bed_rooms;
        $property->bath_rooms = $request->bath_rooms;
        $property->address = $request->address;
        $property->city = $request->city;
        $property->state = $request->state;
        $property->postal_code = $request->postal_code;
        $property->air_cond = $request->air_cond;
        $property->parking = $request->parking;
        $property->swimming = $request->swimming;
        $property->seat = $request->seat;
        $property->alarm = $request->alarm;
        $property->heat = $request->heat;
        $property->laundry = $request->laundry;
        $property->win_cover = $request->win_cover;
        $property->name = $request->name;
        $property->email = $request->email;
        $property->phone = $request->phone;
        $property->message = $request->message;
        $property->building_age = $request->building_age;
        $property->category_id = $request->category_id;
        // $property->status = $request->status;
        $property->sell_type = $request->sell_type;
        // dd($request->all());
        // $property->input = $request->all();
        $property->imageName = $propertyImages;
        $property->user_id = auth()->user()->id;
        $property->save();

        return redirect()->to('/')->with('success', 'Property has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);

        return view('property.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::find($id);

        return view('property.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Property $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        request()->validate(Property::$rules);

        $property->update($request->all());

        return redirect()->route('properties.index')
            ->with('success', 'Property updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $property = Property::find($id)->delete();

        return redirect()->route('properties.index')
            ->with('success', 'Property deleted successfully');
    }
}
