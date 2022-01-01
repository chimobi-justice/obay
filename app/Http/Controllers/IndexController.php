<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['customerMiddleware', 'merchantMiddleware']);
    }
    
    public function index()
    { 
       $foods = Food::latest()->limit(20)->get();

       return view('home', [
            'foods' => $foods
        ]);
    }
}
