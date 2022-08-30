<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Property;
use DB;
use App\Models\Visitor;

class HomeController extends Controller
{
    public function home(Request $request){
        $last_product = Product::latest()->take(1)->get()->last();
        $new_products = Product::latest()->paginate(7);
        $products = Product::paginate(12);
        $electronics = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.name','products.id','products.image','products.amount')
            ->where('categories.title', '=', 'Electronic')
            ->orderBy('products.created_at','DESC')
            ->paginate();
        $bikes = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.name','products.id','products.image','products.amount')
            ->where('categories.title', '=', 'Bike')
            ->orderBy('products.created_at','DESC')
            ->paginate(12);

        $others = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.title', '=', 'Others')
            ->orderBy('products.created_at','DESC')
            ->paginate(12);
            $product = Product::first();
            $log = $request->visitor()->visit($product);
            $log->save();
        Visitor::create(['method'=>$request->method(),'url'=>$request->url(),'useragent'=>visitor()->useragent(),'browser'=>visitor()->browser(), 'device'=>visitor()->device(),'ip'=>visitor()->ip()]);
        return view('web.home', compact('products', 'last_product', 'new_products','bikes','electronics','others','log'));
    }

    public function about(){
        return  view('web.about');
    }

    public function contact(){
        return  view('web.contact');
    }

    public function places(){
        $properties = Property::all();
        return  view('web.places', compact('properties'));
    }
}
