<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUsersRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.c.create');
    }

    public function store(CreateUsersRequest $request) 
    {
        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'accountType' => false
        ]);

        auth()->login($user);

        return redirect()->route(RouteServiceProvider::C_DASHBOARD_ACCOUNT)->with('status', 'Welcome Please continue your profile');
    }
}
