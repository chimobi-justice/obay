<?php

namespace App\Http\Controllers\C\Meals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class BreadController extends Controller
{
    public function index()
    {
         $mealsBreads = Food::where('food_category', 'bread')->paginate(40);

         return view('c.Meals.bread', [
             'mealsBreads' => $mealsBreads
         ]);
    }
}
