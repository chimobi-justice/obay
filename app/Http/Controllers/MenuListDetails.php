<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuListDetails extends Controller
{
    public function index()
    {
        return view('menu.details');
    }
}
