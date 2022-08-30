<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use App\Models\Transaction;
use App\Models\Order;

class FlutterwaveController extends Controller
{
    public function payment(){
        // $orders = Order::where('status', 'approved')->orderBy('created_at')->pluck('id', 'id');
        $cart = \Cart::getTotal();
        return view('orders.pay', compact('cart'));
    }
    public function initialize(Request $request)
    {
        //save the transaction in the db
        $request->validate([
            'fname' => 'required',
            'fname' => 'required',
            'email' => 'required',
            // 'trans_id' => 'required',
            'phone' => 'required',
            'amount' => 'required'
            // 'method'=> 'required',
            // 'order_id'=> 'required'

        ]);
        // $request->trans_id = "later";
        // Transaction::create($request->all());
        //This generates a payment reference
        $reference = Flutterwave::generateReference();

        // Enter the details of the payment
        $data = [
            'payment_options' => 'mobilemoneyrwanda',
            'amount' => $request->amount,
            'email' => request()->email,
            'tx_ref' => $reference,
            'currency' => "RWF",
            'redirect_url' => route('callback'),
            'customer' => [
                'email' => request()->email,
                "phone_number" => $request->phone,
                "name" => request()->lname.''.request()->fname
            ],

            "customizations" => [
                "title" => 'Order payment',
                "description" => "Ordered products payment"
            ]
        ];

        $payment = Flutterwave::initializePayment($data);


        if ($payment['status'] !== 'success') {
            return redirect()->to('/payment')->with('error', 'Payment failed');
            return;
        }

        return redirect($payment['data']['link']);
    }

    /**
     * Obtain Rave callback information
    * @return void
    */
    public function callback()
    {
        
        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {
        
        $transactionID = Flutterwave::getTransactionIDFromCallback();
        $data = Flutterwave::verifyTransaction($transactionID);

        dd($data);
        }
        elseif ($status ==  'cancelled'){
            return redirect()->to('/cart')->with('error', 'Payment cancelled');
        }
        else{
            return redirect()->to('/payment')->with('error', 'Payment failed');
        }
        // Get the transaction from your DB using the transaction reference (txref)
        // Check if you have previously given value for the transaction. If you have, redirect to your successpage else, continue
        // Confirm that the currency on your db transaction is equal to the returned currency
        // Confirm that the db transaction amount is equal to the returned amount
        // Update the db transaction record (including parameters that didn't exist before the transaction is completed. for audit purpose)
        // Give value for the transaction
        // Update the transaction to note that you have given value for the transaction
        // You can also redirect to your success page from here

    }
}
