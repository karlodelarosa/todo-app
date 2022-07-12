<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\CustomController;
use App\Models\User;

class LoginController extends CustomController
{
    public function signUp()
    {
        return view('auth.sign_up');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8|confirmed'
        ]);

        try {
            User::create($request->except('password_confirmation'));

            return $this->sendResponse([], 'Successfully Sign up');
        } catch (\Throwable $t) {
            DB::rollback();
            Log::error($t);
            return $this->sendError(400, $t->getMessage());
        }
    }
//    /**
//     * Handle an authentication attempt.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function authenticate(Request $request)
//    {
//        $credentials = $request->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//        ]);
//
//        if (Auth::attempt($credentials)) {
//            $request->session()->regenerate();
//
//            return redirect()->intended('dashboard');
//        }
//
//        return back()->withErrors([
//            'email' => 'The provided credentials do not match our records.',
//        ]);
//    }
}
