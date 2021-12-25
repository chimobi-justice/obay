<?php

namespace App\Http\Controllers\C;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerOrderController extends Controller
{
    public function order()
    {
        return view('c.order');
    }
}
