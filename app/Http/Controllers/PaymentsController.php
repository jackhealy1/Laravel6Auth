<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        //process the payment
        //unlock the purchase

        event(new ProductPurchased('toy'));
        //or ProductPurchased::dispatch('toy') = same thing

        // //listeners
        // //notify the user
        // request()->user()->notify(new PaymentReceived(900)); //amount hard-coded
        // // Notification::send(request()->user(), new PaymentReceived()); //both do the same thing

        // // award achievements

        // //send shareable coupon to user
        // return redirect('payments/create')
        //     ->with('message', 'Payment sent');
    }
}
