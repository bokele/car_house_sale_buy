<?php

namespace App\Http\Livewire;

use App\Http\Resources\CarSoldResource;
use App\Models\Carsold;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Arr;

class Payment extends Component
{
    public function render($id)
    {
        if (Auth::check()) {

            $car_sold = new CarSoldResource(Carsold::findOrFail($id));

            // if ($car_sold->car->status == 'sold') {
            //     $car_for_sold = $car_sold;
            // } else {
            //     $car_for_rent = $car_sold;
            // }


            $user = auth()->user();

            $user_id = $user->id;


            Stripe::setApiKey('sk_test_Bu4YfvdBhbITFzLhXbfGxDV300CE9nXAI0');

            $intents = PaymentIntent::create([
                'amount' => $car_sold->max_price,
                'currency' => 'ZMW',
                "metadata" => [
                    "order_id" => $car_sold->car_sold,
                    "user_id" => $user->id,
                    "user_email" => $user->email,
                    "user_name" => $user->name,
                ],
                "receipt_email" => $user->email,
            ]);


            $client_secret = Arr::get($intents, 'client_secret');
            return view('livewire.payment', ['car_sold' => $car_sold, 'client_secret' => $client_secret,]);
        } else {
            return redirect()->intended('/login');

            // return redirect('/login');
        }
    }

    public function stripePayment()
    {
    }
}
