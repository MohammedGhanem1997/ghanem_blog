<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:employee', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
      return view('auth.login');
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required',
        'password' => 'required|min:6'
      ]);
      // Attempt to log the user in


      if(Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->intended(url('user'));

      }
      elseif (Auth::guard()->attempt(['phone' => $request->email, 'password' => $request->password])){
          return redirect()->intended(url('user'));

      }
//      elseif(  $employee= Employee::where('mobile',$request->email)->first() ) {
//
//          if (Hash::check($employee->password, $request->password)) {
//              // if successful, then redirect to their intended location
//              Auth::guard('employee')->loginUsingId($employee->id);
//              if (Auth::guard('employee')->user()->type == 'admin') {
//                  return redirect()->route('admin.home');
//              } else {
//                  return redirect()->route('admin.home');
//
//              }
//
//
//          }
//      }
      elseif(Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password]) || Auth::guard('employee')->attempt(['mobile' => $request->email, 'password' => $request->password])  ) {

          // if successful, then redirect to their intended location
          if(Auth::guard('employee')->user()->type =='admin'){
              return redirect()->route('admin.home');
          }

          else{
              return redirect()->route('admin.home');

          }


      }

      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {

//        Auth::guard()->logout();
      if(Auth::guard('employee'))  {
          Auth::guard('employee')->logout();

      }else{
  Auth::guard()->logout();
      }
        return redirect('/');
    }
}
