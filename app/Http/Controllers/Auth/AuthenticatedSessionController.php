<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth/login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        //dd($request);
        $email = $request->email;
        $user = User::where('email', $email)->first();
        $name = $user->name;
        //dd($name);
        $admin_verified = true;

        $request->authenticate();

        $request->session()->regenerate();

        Cookie::queue(Cookie::make('login', $name, 60));
        Cookie::queue(Cookie::make('admin', $admin_verified, 60));

        return redirect('teams');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        Cookie::queue(Cookie::forget('login'));
        Cookie::queue(Cookie::forget('admin'));

        $request->session()->regenerateToken();

        return redirect('teams');
    }
}
