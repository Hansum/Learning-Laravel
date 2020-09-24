<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Str;
use Auth;

class SocialController extends Controller
{
    
    public function redirectToProvider($provider) {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider) {

        if ($provider == 'twitter') {
            // $user = Socialite::driver('twitter')->userFromTokenAndSecret($token, $secret);
            $user = Socialite::driver($provider)->user();
        } else {
            $user = Socialite::driver($provider)->stateless()->user();
        }

        // $user_info = User::updateOrCreate(
        //     ['email' => empty($user->email) ? 'default@gmail.com' : $user->email],
        //     [
        //         'name' => $user->name,
        //         'username' => empty($user->user['login']) ? $user->name : $user->user['login'],
        //         'password' => Str::random(32),
        //         'remember_token' => $user->token
        //     ]
        // );

        // Auth::login($user_info, true);

        // return redirect('/home');
        dd($user->name);
    }
}
