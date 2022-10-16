<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class TwitterLoginController extends Controller
{
    public function redirectToProvider() {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleProviderCallback(Request $request) {
        try {
            $twitterUser = Socialite::driver('twitter')->user();
        } catch (\Exception $e) {
            return redirect('auth/twitter');
        }
        if(User::where('email', $twitterUser->getEmail())->exists()) {
            //ツイッターで作成されたユーザーならそのままパスする
            $user = User::where('email', $twitterUser->getEmail())->first();
            if($user->authtype !== 'twitter'){
                dd("すでに同じメールアドレスが登録されています。");
            }
        } else {
            $user = new User();
            //ユーザーに必要な情報
            $user->name = $twitterUser->getName();
            $user->email = $twitterUser->getEmail();
            $user->password = Hash::make(Str::uuid());
            $user->authtype = 'twitter';
            $user->email_verified_at = now();
            $user->save();
        
        }
        Log::info('Twitterから取得しました。', ['user' => $twitterUser]);
        Auth::login($user);
        return redirect('/dashboard');
    }
}