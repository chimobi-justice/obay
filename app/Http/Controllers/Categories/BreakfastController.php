<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class BreakfastController extends Controller
{
    public function index()
    {
        $breakfastMeals = Food::where('food_category', 'breakfast')->paginate(40);
        return view('category.Breakfast', [
            'breakfastMeals' => $breakfastMeals
        ]);
    }
}