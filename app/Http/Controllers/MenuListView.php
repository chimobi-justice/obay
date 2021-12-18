<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuListView extends Controller
{
    public function index()
    {    
        return view('menu.index');
    }
}
