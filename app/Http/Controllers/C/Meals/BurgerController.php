<?php

namespace App\Http\Controllers\C\Meals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class BurgerController extends Controller
{
    public function index()
    {
         $mealsBurgers = Food::where('food_type', 'burger')->paginate(40);

         return view('c.Meals.burger', [
             'mealsBurgers' => $mealsBurgers
         ]);
    }
}
