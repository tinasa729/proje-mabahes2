<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment as ShetabitPayment;

class OrderController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders()->latest('created_at')->paginate(12);
        return view('profile.orders-list' , compact('orders'));
    }
    public function showDetails(Order $order)
    {

        return view('profile.order-detail' , compact('order'));
    }

    public function payment(Order $order)
    {
        //??
        $this->authorize('view' , $order);

        // $order->price
        $invoice = (new Invoice)->amount(1000);

        return ShetabitPayment::callbackUrl(route('payment.callback'))->purchase($invoice, function($driver, $transactionId) use ($order,$invoice) {

            $order->payments()->create([
                'resnumber' => $transactionId,
            ]);

        })->pay()->render();
    }
}
