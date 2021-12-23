<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUsersRequest;
use App\Models\User;

class MerchantRegisterController extends Controller
{
    public function create()
    {
        return view('register.m.create');
    }

    public function store(CreateUsersRequest $request)
    {
        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'accountType' => true
        ]);

        auth()->login($user);

        return redirect()->route(RouteServiceProvider::M_DASHBOARD);
    }
}
