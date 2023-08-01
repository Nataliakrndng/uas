<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use View;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        $price = rand(100000, 125000);
        return view('register', ['price' => $price]);
    }

    public function processRegistration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gender' => 'required|in:Male,Female',
            'hobbies' => 'required|string|min:3',
            'instagram' => 'required|url',
            'mobile' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $price = rand(100000, 125000);

        $request->session()->put('registration_data', $request->all());
        $request->session()->put('price', $price);

        return redirect()->route('payment');
    }

}
