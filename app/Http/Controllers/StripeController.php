<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function index()
    {
        return view('pages.stripe.index');
    }
    public function checkout()
    {

        //get user_id, phone and amount from session
        $name = session()->get('name');
        $user_id = session()->get('user_id');
        $phone = session()->get('phone');
        $email = session()->get('email');
        $amount = session()->get('amount');
        $amount = $amount * 100;

        // 'Account number: '.$user_id.' Phone: '.$phone.' Email: '.$email
        $desc = '';
        if($user_id != null){
            $desc .= 'Account number: '.$user_id.' ';
        }
        if($phone != null){
            $desc .= 'Phone: '.$phone.' ';
        }
        if($email != null){
            $desc .= 'Email: '.$email.' ';
        }
        

        if($email != null && $amount != null){
            Stripe::setApiKey(config('stripe.sk'));
            $sesstion = Session::create([
                'line_items' =>[
                    [
                        'price_data' =>[
                            'currency' => 'usd',
                            'product_data' =>[
                                'name' => 'TradeLive AI Deposit',
                                'description' => $desc
                            ],
                            'unit_amount' => $amount,  
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => route('stripe.success', app()->getLocale()),
                'cancel_url' => route('deposit_withdrawal_methods', app()->getLocale())
            ]);
    
            return redirect()->away($sesstion->url);
        }

        return redirect()->route('deposit_withdrawal_methods', app()->getLocale());

        
    }
    public function success($locale, Request $request)
    {
        $email = session()->get('email');
        if($email == null){
            return redirect()->route('deposit_withdrawal_methods', app()->getLocale());
        }
        
        //get user_id, phone and amount from session
        $name = '';
        $user_id = '';
        $email = '';
        $phone = '';
        $amount = '';

        $name = session()->get('name');
        $user_id = session()->get('user_id');
        $email = session()->get('email');
        $phone = session()->get('phone');
        $amount = session()->get('amount');
        $date = date('Y-m-d H:i:s');
        // delete user_id, phone and amount from session
        session()->forget('name');
        session()->forget('user_id');
        session()->forget('phone');
        session()->forget('amount');
        session()->forget('email');
        
        $to_name = 'TradeLive AI';
        $data = array('name'=>$name, 'user_id' => $user_id, 'phone' => $phone, 'amount' => $amount, 'email' => $email,'date'=>$date);
        $list = [$email];
        $list[] = 'support@tradelive.ai';
        foreach($list as $ll){
            Mail::send('emails.deposit', $data, function ($message) use ($to_name, $ll) {
                $message->to($ll, $to_name)
                    ->subject('TradeLive AI Deposit');
                $message->from('support@tradelive.ai', 'TradeLive AI Deposit');
            });
        }

        return view('pages.stripe.success');
    }

}
