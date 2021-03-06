<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['customerMiddleware', 'merchantMiddleware']);
    }
    
    public function index()
    {
        $carts = Cart::content();

        return view('cart', [
            'carts' => $carts
        ]);
    }
    public function store(Request $request, $id)
    {
        $food = Food::findOrFail($id);

        Cart::add(
            $food->id, 
            $food->name, 
            $request->input('quantity'), 
            $food->new_price,
            0,
            [$food->food_image] 
        );

        return back()->with('status', 'Added to cart');
    }

    public function cart()
    {
        
        $carts = Cart::content();

        return view('cart', [
            'carts' => $carts
        ]);
    }

    public function empty()
    {
        Cart::destroy();
        
        return back()->with('status', 'All items has been delete from cart!');
    }

    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('status', 'Item has been removed!');
    }
}
