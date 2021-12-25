<?php

namespace App\Http\Controllers\M;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerchantOrderController extends Controller
{
    public function order()
    {
        return view('m.dashboard.order');
    }
}
