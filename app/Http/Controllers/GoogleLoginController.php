<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GoogleLoginController extends Controller
{
    public function redirectToProvider() {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(Request $request) {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
        } catch (\Exception $e) {
            return redirect('auth/google');
        }

        if(User::where('email', $googleUser->getEmail())->exists()) {
            //ツイッターで作成されたユーザーならそのままパスする
            $user = User::where('email', $googleUser->getEmail())->first();
            if($user->authtype !== 'google'){
                dd("すでに同じメールアドレスが登録されています。");
            }
        } else {
            $user = new User();
            //ユーザーに必要な情報
            $user->name = $googleUser->getName();
            $user->email = $googleUser->getEmail();
            $user->password = Hash::make(Str::uuid());
            $user->authtype = 'google';
            $user->email_verified_at = now();
            $user->save();
        
        }
        Log::info('Googleから取得しました。', ['user' => $googleUser]);
        Auth::login($user);
        return redirect('/dashboard');

    }

}
