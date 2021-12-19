<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class IndexController extends Controller
{
    public function index()
    { 
       $foods = Food::latest()->paginate(20);

       return view('home', [
            'foods' => $foods
        ]);
    }
}
