<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sub;

class SubsController extends Controller
{
    public function index()
    {
        $subs= Sub::all();
        return view('admin.subs', compact('subs'));
    }
    public function store(Request $request){
        $this->validate(request(), [
            'email' => 'required|email|unique:subs',
        ]);
        $sub = Sub::create($request->all());
        return redirect('/')->with('success','Thank you for subscribing to our site.');
    }
}
