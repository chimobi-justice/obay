<?php

namespace App\Http\Controllers\C;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('c.account');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'country' => 'required',
            'state' => 'required',
            'number' => 'required|numeric|min:11',
            'address' => 'required',
        ]);

        auth()->user()->update($request->all());

        return back()->with('status', 'Profile updated successfully');
    }

    public function updateSettings(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required|current_password',
            'password' => 'required|confirmed',
        ]);

        auth()->user()->update([
            'password' => $request->password
        ]);

        return back()->with('status', 'Your password has been updated!');
    }

    public function destroy()
    {
        if (auth()->check()) {
            auth()->user()->delete();
        }

        return redirect()->route('login');
    }
}
