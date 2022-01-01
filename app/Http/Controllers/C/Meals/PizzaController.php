<?php

namespace App\Http\Controllers\C\Meals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class PizzaController extends Controller
{
    public function index()
    {
         $mealsPizza = Food::where('food_category', 'pizza')->paginate(40);

         return view('c.Meals.pizza', [
             'mealsPizza' => $mealsPizza
         ]);
    }
}
