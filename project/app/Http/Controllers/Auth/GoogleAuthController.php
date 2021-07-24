<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class GoogleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callback(Request $request){
            $googleuser = Socialite::driver('google')->user();
            $user =  User::where('email',$googleuser->email)->first();


            if(! $user){

                $user = User::create([
                    'name'=>$googleuser->name,
                    'email'=>$googleuser->email,
                    'password'=>bcrypt(\Str::random(16)),
                    ]);

            }
            auth()->loginUsingId($user->id);
            return redirect('/');
    }


}
