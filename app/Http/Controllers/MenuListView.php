<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class MenuListView extends Controller
{
    public function __construct()
    {
        $this->middleware(['customerMiddleware', 'merchantMiddleware']);
    }
    
    public function index()
    {    
        $foods = Food::paginate(40);

        return view('menu.index', [
            'foods' => $foods
        ]);
    }
}
