<?php

namespace App\Http\Controllers\M;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MerchantAccountController extends Controller
{
    public function index()
    {
        return view('m.dashboard.account');
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
