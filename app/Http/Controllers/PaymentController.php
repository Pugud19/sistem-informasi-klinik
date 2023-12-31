<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request){
        return view('payment.paymentForm');
    }


    public function payment(Request $request)
    {
        // Set your Merchant Server Key
	\Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
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
	        'last_name' => '',
	        'email' => $request->get('email'),
	        'phone' => $request->get('number'),
	    ),
	);

	$snapToken = \Midtrans\Snap::getSnapToken($params);
    // return $snapToken;

    return view('payment.payment', ['snap_token'=>$snapToken]);
    }

    public function payment_post(Request $request){
        $json = json_decode($request->get('json'));

        $order = new Pembayaran();
        $order->status = $json->transaction_status;
        $order->name = $request->get('nama');
        $order->email = $request->get('email');
        $order->number = $request->get('number');
        $order->transaction_id = $json->transaction_id;
        $order->order_id = $json->order_id;
        $order->gross_amount = $json->gross_amount;
        $order->payment_type = $json->payment_type;
        $order->payment_code = isset($json->payment_code) ? $json->payment_code : null;
        $order->pdf_url = isset($json->pdf_url) ? $json->pdf_url : null;

        return $order->save() ? redirect(url('/'))
        ->with('success', 'Order Berhasil dibuat!') : redirect(url('/'))
        ->with('error', 'Transaksi Gagal!');
    }
}
