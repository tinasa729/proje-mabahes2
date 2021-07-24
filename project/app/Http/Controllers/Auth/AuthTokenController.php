<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\ActiveCode;
use App\Http\Controllers\Controller;
use App\Notifications\LoginToWebsite as LoginToWebsiteNotification;
use Illuminate\Http\Request;

class AuthTokenController extends Controller
{
    public function verify(Request $request){

        $validData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'password' => 'required',
        ]);    
        $request->session()->forget('information');
        $request->session()->push('information',[]);
        $request->session()->push('information',$request->name);
        $request->session()->push('information',$request->email);
        $request->session()->push('information',$request->phone_number);
        $request->session()->push('information',$request->password);
        $code = ActiveCode::generateCode($request->phone_number);
        return view('profile.phone-verify');
    }
}
