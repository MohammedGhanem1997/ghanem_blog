<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hash;
use Session;
use Mail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class RegistrationAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }



    public function registration()
    {
        return view('auth.register');
    }

    public function customRegistration(Request $request)
    {
//        return  $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users|unique:admins|unique:employees',
            'password' => 'required|min:6',
        ]);


        $data = $request->all();
        $check = $this->create($data,$request);

      //  return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data,$request)
    {
        $token = $session_id = Session::get('id').time() ;
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'remember_token' => $token
        ]);
        $this->sendmsg($token,$request);

    }


    public function sendmsg($token,$request)
    {

        Mail::send('components.email', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Email Verification Mail go to this link ' );
        });
    }


    public function verifyAccount($token)
    {
        $verifyUser = User::where('remember_token', $token)->first();
        $message = 'Sorry your email cannot be identified.';
        if(!is_null($verifyUser) ){
            $user = $verifyUser;
            if(!$user->email_verified_at) {
                $verifyUser->email_verified_at = Carbon::now();
                $verifyUser->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
        return redirect()->route('login')->with('message', $message);
    }



    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
