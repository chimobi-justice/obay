<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\SessionUsersRequest;
use App\Providers\RouteServiceProvider;

class sessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    
    // public function store(SessionUsersRequest $request)
    // {
    //     if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
    //         throw ValidationException::withMessages([
    //             'password' => 'Your provided credentials could not be verified.'
    //         ]);
    //     }

    //     session()->regenerate();

    //     return redirect()->route(RouteServiceProvider::DASHBOARD)->with('status', 'Welcome back');

    // }

    // public function destroy()
    // {
    //     auth()->logout();

    //     return redirect(RouteServiceProvider::LOGIN);
    // }
}
