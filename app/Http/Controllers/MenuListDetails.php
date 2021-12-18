<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Gloudemans\Shoppingcart\Facades\Cart;

class MenuListDetails extends Controller
{
    public function show($id)
    {
        $food = Food::findOrFail($id);
        $cart = Cart::content();

        return view('menu.details', [
            'food' => $food,
            'cart' => $cart
        ]);
    }

    public function removeCart()
    {
        $carts = Cart::content();

        foreach ($carts as $cart) {
            Cart::remove($cart->rowId);
        }

        return back()->with('status', 'One item remove from cart successfully');
    }
}
