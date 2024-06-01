<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\PaymentMethod;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('index');
    }

    public function download()
    {
        return view('download');
    }

    public function addToCart()
    {
        $paymentMethods = PaymentMethod::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->first();
        return view('add-cart', compact('paymentMethods'));
    }

    public function receiver(Request $request)
    {
        $rules = [
            '_token' => ['required'],
            'address' => ['required', 'string', 'max:256', 'min:8'],
            'card' => ['required', 'string', 'regex:/[0-9\s]{19}/'],
            'expiry' => ['required', 'string', 'regex:/(0[1-9]|1[0-2])\/\d{2}/'],
            'cvv' => ['required', 'numeric', 'regex:/^\d{3,4}$/']
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) return response()->json($validator->errors()->all());

        $user_id = ['user_id' => Auth::user()->id];
        $cart = Cart::create($user_id);
        $user_id['cart_id'] = $cart->id;
        info($user_id);
        $request->merge($user_id);
        $request = $request->except(['_token']);
        PaymentMethod::create($request);
        return true;
    }

    public function cart()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $paymentMethods = PaymentMethod::where('user_id', Auth::user()->id)->get();
        return view('cart', compact('carts'), compact('paymentMethods'));
    }
}
