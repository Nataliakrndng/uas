<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment');
    }

    public function processPayment(Request $request)
    {
        $amount = $request->input('amount');
        $sessionPrice = $request->session()->get('price');

        if ($amount < $sessionPrice) {
            return back()->with('underpaid', $sessionPrice - $amount);
        } elseif ($amount > $sessionPrice) {
            return back()->with('overpaid', $amount - $sessionPrice);
        }

        return redirect()->route('home');
    }

    public function processBalance(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('register');
        }

        if ($request->input('action') === 'yes') {
            $amount = $request->session()->get('overpaid_amount');
            $user->balance += $amount;
            $user->save();
        }

        return redirect()->route('payment');
    }
}
