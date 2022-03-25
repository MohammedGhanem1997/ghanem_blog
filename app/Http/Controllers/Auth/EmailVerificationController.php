<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{

    public function verify($token){

        $user=User::where('remember_token',$token)->first();

        $user->email_verified_at=Carbon::now();
        $user->save();
        return redirect('home')->with('success',translate('done').''.''.translate('successfully'));
    }

}
