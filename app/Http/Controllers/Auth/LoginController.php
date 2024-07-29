<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return response()->json(['message' => 'ورود موفقیت امیز بود .'], 201);
        }

        return back()->withErrors([
            'email' => 'اطلاعات وارد شده صحیح نمی‌باشد.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        Auth::logout();

        return response()->json(['message' => 'خروج با موفقیت انجام شد'], 200);
    }
}

