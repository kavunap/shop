<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
        {
        $this->middleware('auth')->except(['index','show']);
        // OR
        // $this->middleware('auth')->only(['store','update','edit','create']);
        }
    
    public function index()
    {
        $new_products = Product::latest()->paginate(12);
        $last_product = Product::latest()->get()->last();
        $products = Product::all();
        $electronics = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.name','products.id','products.image','products.amount','products.address','products.description','products.status','products.available','products.category_id','products.user_id')
            ->where('categories.title', '=', 'Electronic')
            ->orderBy('products.created_at','DESC')
            ->paginate(3);
        
        $bikes = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.name','products.id','products.image','products.amount','products.address','products.description','products.status','products.available','products.category_id','products.user_id')
            ->where('categories.title', '=', 'Bike')
            ->orderBy('products.created_at','DESC')
            ->paginate(3);

        $others = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.name','products.id','products.image','products.amount','products.address','products.description','products.status','products.available','products.category_id','products.user_id')
            ->where('categories.title', '=', 'Others')
            ->orderBy('products.created_at','DESC')
            ->paginate(12);
        return view('products.index', compact('products', 'new_products', 'last_product','electronics','bikes','others'));
    }

    public function dashboard(Request $request)
    {
        $products = Product::all();
        $visitor = $request->visitor()->isOnline();
        return view('admin.dashboard', compact('products','visitor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (auth()->check()) {
            $categories = Category::all()->sortByDesc('title')->pluck('title', 'id');
            return view('products.create', compact('categories'));
    //     }
    //     else{

    //         return redirect('/login');
    //     }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'amount' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);
        $input = $request->all();
        if ($request->address = '') {
            $input['address']= auth()->user()->location;
        }
        if ($request->discount = '') {
            $input['discount']= 0;
        }
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $input['user_id'] = auth()->user()->id;
        Product::create($input);
        return redirect('/')->with('success', 'Product saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $related = Product::where('category_id', $product->category->id)->paginate(4);
        // $project = Project::with('categories')->findOrFail(1);

        // $categoryIds = $product->categories->pluck('id')->toArray();
        // $similarProducts = Product::has('categories', function ($query) use ($categoryIds) {
        //     return $query->whereIn('id', $categoryIds);
        // })->whereNot('id', $product->id)
        //     ->limit(4)
        //     ->get();
        return view('products.show', compact('product', 'related'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
