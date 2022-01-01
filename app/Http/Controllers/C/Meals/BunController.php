<?php

namespace App\Http\Controllers\C\Meals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class BunController extends Controller
{
    public function index()
    {
         $mealsBun = Food::where('food_category', 'bun')->paginate(40);

         return view('c.Meals.bun', [
             'mealsBun' => $mealsBun
         ]);
    }
}
