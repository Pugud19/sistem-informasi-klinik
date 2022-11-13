<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request){
        return view('payment.paymentForm');
    }


    public function payment(Request $request)
    {
        // Set your Merchant Server Key
	\Midtrans\Config::$serverKey = 'SB-Mid-server-zak8uJ90ocxGrPEhIo11_-ca';
	// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
	\Midtrans\Config::$isProduction = false;
	// Set sanitization on (default)
	\Midtrans\Config::$isSanitized = true;
	// Set 3DS transaction for credit card to true
	\Midtrans\Config::$is3ds = true;

	$params = array(
	    'transaction_details' => array(
	        'order_id' => rand(),
	        'gross_amount' => 10000,
	    ),
        'item_details' => array(
            [
                "id"=> "a01",
                "price"=> 7000,
                "quantity"=> 1,
                "name"=> "Apple"
            ],
        ),
	    'customer_details' => array(
	        'first_name' => $request->get('nama'),
	        'alamat' => $request->get('alamat'),
	        'email' => 'budi.pra@example.com',
	        'phone' => $request->get('number'),
	        'date' => $request->get('date'),
	        'tipe_pembayaran' => $request->get('tipe_pembayaran'),
	        'nama_paket' => $request->get('nama_paket'),
	    ),
	);

	$snapToken = \Midtrans\Snap::getSnapToken($params);
    // return $snapToken;

    return view('payment.payment', ['snap_token'=>$snapToken]);
    }
}
