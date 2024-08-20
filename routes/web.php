<?php

use Blognevis\Payments\Payment;
use Illuminate\Support\Facades\Route;

Route::get('/request-nowpayments', function () {
    $params = [
  "price_amount"=> 1000,
  "price_currency"=> "usd",
  "order_id"=> "RGDBP-21314",
  "order_description"=> "Apple Macbook Pro 2019 x 1",
  "ipn_callback_url"=> "https://nowpayments.io",
  "success_url"=> url('/verify-nowpayments'),
  "cancel_url"=>  url('/verify-nowpayments')
    ];
        $res = (new Payment('nowpayments'))->pay($params);
   return redirect($res['payment_url']);
});

Route::get('/verify-nowpayments', function () {
   $res = (new Payment('nowpayments'))->verify(request()->get('NP_id'));
   return response()->json(($res));
});

