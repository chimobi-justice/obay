<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function store(Request $request, $id)
    {
        $food = Food::findOrFail($id);

        Cart::add(
            $food->id, 
            $food->title, 
            $request->input('quantity'),  
            $food->old_price,
            $food->new_price
        );

        return back()->with('status', 'Added to cart');
    }
}
