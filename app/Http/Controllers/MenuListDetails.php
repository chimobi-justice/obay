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
}
