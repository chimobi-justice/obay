<?php

namespace App\Http\Controllers\C\Meals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class FrenchFriesController extends Controller
{
    public function index()
    {
         $mealsFrenchFries = Food::where('food_category', 'french-fries')->paginate(40);

         return view('c.Meals.french-fries', [
             'mealsFrenchFries' => $mealsFrenchFries
         ]);
    }
}
