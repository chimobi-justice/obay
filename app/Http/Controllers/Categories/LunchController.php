<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class LunchController extends Controller
{
    public function index()
    {
        $lunchMeals = Food::where('food_category', 'lunch')->paginate(40);
        return view('category.Lunch', [
            'lunchMeals' => $lunchMeals
        ]);
    }
}
