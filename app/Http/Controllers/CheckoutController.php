<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use App\Room;
use Illuminate\Support\Facades\Mail;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    public function getCheckout(){
        return view('layout.checkout');
    }

    public function store(Request $request){

        try{

            $charge = Stripe::charges()->create([
                'amount' => $request->input('total'),
                'currency' => 'NGR',
                'source' => $request->stripeToken,
                'description' => 'Payment for '.$request->input('room_type').' for the durantion of '.$request->input('duration').' days',
                'receipt_mail' => $request->input('email')


                ]);
                $to_name = 'Dear esteem customer';
                $to_email = $request->input('email');
                $data = array('name'=> 'Mativa hotels',
                                'body'=> 'Your booking for our '.$request->input('room_type').' room has been confirmed');

                Mail::send('emails.mail', $data, function ($message) use($to_name, $to_email) {
                    $message->from('mativahotels@bookings.com', 'Booking confirmation');
                    $message->to($to_email, $to_name);
                    $message->subject('Mativa Hotel Booking');
                    $message->priority(3);
                    $message->attach('pathToFile');
                });

                return redirect()->route('thankyou.index');

        } catch (CardErrorException $e){

        }

    }

    /* public function proceessPayment(){
    $Stripe = Stripe::setApiKey('sk_test_OWE1s9IEk2b5YcTKOmXwInsm001U0Kn8td');

    $intent = PaymentIntent::create([
        'amount' => 1099,
        'currency' => 'usd',
        // Verify your integration in this guide by including this parameter
        'metadata' => ['integration_check' => 'accept_a_payment'],
    ]);
    }*/

}
