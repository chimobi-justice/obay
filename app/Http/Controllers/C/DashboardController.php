<?php

namespace App\Http\Controllers\C;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use Gloudemans\Shoppingcart\Facades\Cart;

class DashboardController extends Controller
{
    public function index()
    {
        $foods = Food::latest()->paginate(50);

        return view('c.dashboard', [
             'foods' => $foods
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

        return view('c.cart', [
            'carts' => $carts
        ]);
    }

    public function show($id)
    {
        $food = Food::findOrFail($id);
        $cart = Cart::content();

        return view('c.food-details', [
            'food' => $food,
            'cart' => $cart
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
