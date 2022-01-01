<?php

namespace App\Http\Controllers\C\Meals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class RiceController extends Controller
{
    public function index()
    {
         $mealsRice = Food::where('food_category', 'rice')->paginate(40);

         return view('c.Meals.rice', [
             'mealsRice' => $mealsRice
         ]);
    }
}
