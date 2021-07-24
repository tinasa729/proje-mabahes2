<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function payment()
    {
        $cart = Cart::instance('cart');
        $cartItems = $cart->all();
        if($cartItems->count()) {
            $price = $cartItems->sum(function($cart) {
               return $cart['product']->price * $cart['quantity'];
            });
 
            $orderItems = $cartItems->mapWithKeys(function($cart) {
               return [$cart['product']->id => [ 'quantity' => $cart['quantity']] ];
            });

            $order = auth()->user()->orders()->create([
                'status' => 'paid',
                'price' => $price
            ]);

            $order->products()->attach($orderItems);

            alert()->success('کاربر عزیز پرداخت شما با موفیت انجام شد','پرداخت موفیت آمیز')->persistent('باشه');
            $cart->flush();
        }

        return back();
    }
}
