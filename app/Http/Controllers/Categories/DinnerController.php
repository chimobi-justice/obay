<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class DinnerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['customerMiddleware', 'merchantMiddleware']);
    }
    
    public function index()
    {
        $dinnerMeals = Food::where('food_category', 'dinner')->paginate(40);
        return view('category.Dinner', [
            'dinnerMeals' => $dinnerMeals
        ]);
    }
}
