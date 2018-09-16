<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/thanks', function () {

    \Stripe\Stripe::setApiKey(getenv('STRIPE_SECRET_KEY'));

    try {
        $charge = \Stripe\Charge::create(array(
            "amount" => 100,
            "currency" => "jpy",
            "source" => $_POST['stripeToken'],
            "description" => "100yen pay"
        ));
    } catch(\Stripe\Error\Card $e) {

    }

    return view('thanks');
});
