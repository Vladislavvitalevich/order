<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $carts = Cart::where('user_id', Auth::id())->get();
        dd($carts[0]->products()->get());
//dd($carts->first());
        return view('cart.index', compact('carts'));
    }
}
