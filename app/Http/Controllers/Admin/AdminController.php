<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\translate;
use App\Models\User;
use App\Notifications\ResetPassword;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.index');
    }

    public function changepassword()
    {


    }


    public function security()
    {


        return view('admin.pages.admin.resetpassword');
    }
    public function changepasswordpost(Request $request)
    {
        $request->validate([

            'password' => 'required|min:6|confirmed',
            'oldpassword' => 'required|min:6',

        ]);

        $password = Hash::make($request->password);


        if (  Hash::check($request->oldpassword, Auth::guard('employee')->user()->password ) ){

            $employee=Employee::find(Auth::guard('employee')->user()->id);
            $password = Hash::make($request->password);

            $employee->password=$password;
            $employee->save();
            return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

        }
        return redirect()->back()->with('errors','password not valid');







    }

    public function reset(Request $request)
    {



        return view('admin.pages.admin.reset');
    }

    private function sendResetEmail($email, $token)
    {

        $user=Employee::where('email',$email)->first();
        if ( !empty($user) ) {
            $data = $user;


            $userData = [
                'email' => $email,
                'body' => ' pleade go to this link to reset ur password ',
                'thanks' => 'thanks',
                'text' => 'reset',

                'url' => url('admin/admin/change/password', $token),

            ];

            Notification::send($data, new ResetPassword ($userData));

        dd('Bill notification has been sent!');
    }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
$admin=Auth::guard('employee')->user();

        return view('admin.pages.admin.edite')->with('admin',$admin);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $imageName=null;
        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/profile/image'), $imageName);
            $imageName='uploads/profile/image/'.$imageName;
        }
        $input = $request->all();
        $employee=Employee::find(Auth::guard('employee')->user()->id);
         $employee->fill($input)->save();

        $employee->image=$imageName;
        $employee->save();
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
