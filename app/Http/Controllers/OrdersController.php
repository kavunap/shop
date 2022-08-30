<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Notification;
use App\Notifications\OrderNotification;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->paginate(30);

        return view('admin.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $products = Product::lists('ProductName', 'id');
        $products = Product::where('ProductAvailable', 1)->orderBy('ProductName')->pluck('ProductName', 'id');
        return view('orders.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'phone' => 'required|size:10',
            'location' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
        ]);

        
        // Mail::to($request->email)->send(new orderMail($details));
        $orderedProduct = Product::where('id', $request['product_id'])->first();
        if ($orderedProduct->Quantity > $request['quantity']) {
            $order = Order::create($request->all());
            $orderedProduct->Quantity = $orderedProduct->Quantity - $request['quantity'];
            $orderedProduct->save();
            return redirect()->route('products')
                        ->with('success','Order successfully saved, we will contact you as soon as possible.');
        }
        else{
            return redirect()->route('products')
            ->with('error','Sorry, We do not have much sticks in stock.');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

        return view('admin.orders.show',compact('order'));
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
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('admin.orders.index')
                        ->with('success','order deleted successfully');

    }

    // public function approve(Order $order)
    // {
        
        
    //     $order->status = 'approved';
    //     $order->save();
    //     // $order->update($request->all());

    //     return redirect()->route('admin.orders.index')
    //                     ->with('success','order approved');

    // }

    public function approve($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'approved'; //Approved
        $order->save();
        Notification::route('mail', $order->email)->notify(new OrderNotification($order->full_name, $order->status, $order->quantity, $order->id));
        // return('email sent');
        return redirect()->route('admin.orders.index')
            ->with('success','order approved and email sent');
     }

     public function reject($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'rejected'; //Rejected
        $order->save();
        Notification::route('mail', $order->email)->notify(new OrderNotification(
            $order->full_name, $order->status, $order->quantity, $order->id));
        return redirect()->route('admin.orders.index')
            ->with('success','order rejected');
     }

    
    

}
