<?php

namespace App\Http\Controllers\auth;
use Notification;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use App\Notifications\ResetPassword;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

use Session;
class AccountsController extends Controller
{
    public function validatePasswordRequest(Request $request)
    {

        $user = DB::table('users')->where('email', '=', $request->email)
            ->first();//Check if the user exists
        $employee = DB::table('employees')->where('email', '=', $request->email)
            ->first();//Check if the user exists


        if (empty($user) ) {
            if (empty($employee) ) {

                return redirect()->back()->withErrors(['email' => 'User does not exist']);

            }
            else{


                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' =>  Session::get('id').time(),
                    'created_at' => Carbon::now()
                ]);//Get the token just created above
                $tokenData = DB::table('password_resets')
                    ->where('email', $request->email)->first();

                if ($this->sendResetEmail($request->email, $tokenData->token)) {
                    return redirect()->back()->with('success', 'A reset link has been sent to your email address.');
                } else {
                    return redirect()->back()->withErrors(['error' => 'A Network Error occurred. Please try again.']);

                }



            }

            return redirect()->back()->withErrors(['email' => 'User does not exist']);
        }



//Create Password Reset Token
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => Session::get('id').time(),
            'created_at' => Carbon::now()
        ]);//Get the token just created above
        $tokenData = DB::table('password_resets')
            ->where('email', $request->email)->first();

        if ($this->sendResetEmail($request->email, $tokenData->token)) {
            return redirect()->back()->with('status', trans('A reset link has been sent to your email address.'));
        } else {
            return redirect()->back()->withErrors(['error' => trans('A Network Error occurred. Please try again.')]);

        }
    }



    public function resetPassword($token){

      $usertoken=  DB::table('password_resets')->where('token',$token)->first();


        $user = User::where('email', '=', $usertoken->email)
            ->first();//Check if the user exists
        if ( empty($user)){
            return view('auth.changepassword',compact('user'));

        }

        $employee = Employee::where('email', '=',$usertoken->email)
            ->first();//Check if the user exists
        if ( empty($employee)){
            $user= $employee;
            return view('auth.changepassword',compact('user'));

        }

    }

    public function changepassward(Request $request){

        $password = Hash::make($request->password);


        $user = User::where('email', '=', $request->email)
            ->first();//Check if the user exists
        if ( !empty($user)){
            $user->password=$password;
            return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

        }

        $employee = Employee::where('email', '=',$request->email)
            ->first();//Check if the user exists
        if ( !empty($employee)){
            $user= $employee;
            $user->password=$password;
            return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

        }

    }
    private function sendResetEmail($email, $token)
    {

$user=User::where('email',$email)->first();
if ( !empty($user) ){
    $data=$user;

}
else{
    $user=Employee::where('email',$email)->first();

    $data=$user;
}
        $userData = [
            'email' => $email,
            'body' => ' pleade go to this link to reset ur password ',
            'thanks' => 'thanks',
            'text' => 'reset',

            'url' => url('/reset_password',$token),

        ];

        Notification::send($data, new ResetPassword ($userData));

        dd('Bill notification has been sent!');
    }

    public function resetpasswordform (){

        return view('auth.resetpassord');
    }
}
