<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use Hash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class EmployeeRegisterController extends Controller
{


    public function showLoginForm()
    {
        return view('auth.login');
    }

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
        return view('admin.pages.employee.create');
    }

    public function customRegistration(Request $request)
    {
//        return  $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users|unique:admins|unique:employees',
            'password' => 'required|min:6|confirmed',
        ]);


        $data = $request->all();

        $check = $this->create($data,$request);

        return redirect()->back()->withSuccess('You have signed-in');
    }

    public function create(array $data,$request)
    {

        $password = Hash::make($data['password']);

        $imageName = 'uploads/logo/logo.jpg';
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/profile/image'), $imageName);
            $imageName = 'uploads/profile/image/' . $imageName;
        }

        $employee = Employee::create($request->all());
        $employee->password = $password;
        $employee->$imageName;

        $employee->save();
        if ($request->role != null) {

            $role = Role::find($request->role);

            //dd( $role);
            $employee->assignRole($role);
        }

        if ($request->department_id != null) {
            $department = Department::find($request->department_id);
            if ($department->role){
                $role = Role::find($department->role);

            $employee->assignRole($role);
        }
    }
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));


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
