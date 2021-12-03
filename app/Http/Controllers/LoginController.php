<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Illuminate\Support\Facades\Auth;
use illuminate\Database\QueryException;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash as FacadesHash;
use App\Models\User;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function loginForm()
    {
        // dd(openssl_get_cert_locations());
        return view('login.form');
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        // regenerate CSRF token
        session()->regenerateToken();

        return redirect()->route('hotel-form');
    }

    public function authenticate(Request $request)
    {
        try {
            $data = $request->getParsedBody();
            $credentials = [
                'email' => $data['email'],
                'password' => $data['password']
            ];

            if (Auth::attempt($credentials)) {
                // regenerate the new session ID
                session()->regenerate();

                // redirect to the requested URL or
                // to route product-list if does not specify
                if (Auth::user()->role == 'ADMIN') {
                    return redirect()->route('admin-hotel');
                } else
                    return redirect()->intended(route('hotel-form'));
            }
            // if cannot authenticate redirect back to loginForm with error message.
            return redirect()->back()->withErrors([
                'credentials' => 'The provided credentials do not match our records.',
            ]);
        } catch (QueryException $excp) {
            return redirect()->back()->withInput()->withErrors([
                'error' => $excp->errorInfo[2]
            ]);
        }
    }

    public function github()
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubRedirect()
    {
        $user = Socialite::driver('github')->user();

        $user = User::firstOrCreate([
            'email' => $user->email,
        ], [
            'role' => 'USER',
            'password' => FacadesHash::make(Str::random(24))
        
        ]);

        Auth::login($user, true);

        return redirect()->route('hotel-form');
    } 

    
}
