<?php

namespace App\Http\Controllers\C;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('c.dashboard');
    }
}
