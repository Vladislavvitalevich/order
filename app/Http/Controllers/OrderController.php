<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
    //Доставать из бд все продукты

        $products = Product::all();
        return view('order.index', compact('products'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|integer',
            'product_id' => 'required|integer',
        ]);


        $cart = new Cart();
        $cart->user_id = $request->user_id;
        $cart->product_id = $request->product_id;
        $cart->count = 1;
        $cart->save();
        return redirect()->back()->withErrors('Product adding, may be something else? ');
    }
}
