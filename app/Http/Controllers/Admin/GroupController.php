<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class GroupController extends Controller
{
    public function __construct()
    {
        $routeArray = app('request')->route()->getAction();
        $controllerAction = $routeArray['controller'];

        list($controller, $action) = explode('@', $controllerAction);



        $roles= Role::all();

        foreach ($roles as $role){
            foreach ($role->users as $user) {
                if ($role->name =='admin'){
                    $this->middleware('role:employee|admin', ['only' => ['show']]);

                }
                elseif (Auth::guard('employee')->user()->id == $user->id && $role->name !='admin') {

                    foreach ($role->permissions as $permission){

                        if ($controller == $permission->controller){

                            $this->middleware('permission:employee|'.$permission->method, ['except' => [$permission->method]]);

                        }



                    }
                    if ( $role->name !='admin') {
//
//                    dd($user->id);
                        $this->middleware('permission:employee|');

                    }

                }


            }

        }


    }    public function index()
    {
        return view('admin.pages.group.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([


            'name' => 'required|unique:roles',

        ]);

        $role1 = Role::create(['name' => $request->name,'status'=>$request->status,'groups'=>1,'guard_name'=>'employee','custom_team_id'=>null,'created_at'=>null,'updated_at'=>null]);

//        foreach ($request->permissions as $permission){
//
//            $role1->givePermissionTo($permission);
//        }

        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {

        $role= Role::where('name',$name)->first();

//       return $role->permissions;

        return view('admin.pages.group.edit',compact('role'));

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
        $role= Role::find($id);
        $role->name=$request->name;
        $role->status=$request->status;
        $role->save();
        foreach ($request->permissions as $permission){

            $role->givePermissionTo($permission);
        }
        foreach ($request->grouppermissions as $permission){

            $role->givePermissionTo($permission);
        }
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));



    }
    public function employee($id)
    {

        $role= Role::find($id);
//
//        $role= $role->users;
//        return $role;



        return view('admin.pages.group.employee',compact('role'));


    }
    public function employee_group(Request $request,$id){
        $role= Role::find($id);
if ($request->employee != null){


        foreach ($request->employee as $employee){
            $employee=Employee::find($employee);
            $employee->assignRole($role);
        }
    }



        foreach ($request->allemployee as $employee){

            $employee=Employee::find($employee);
            $employee->assignRole($role);
        }
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
        $role= Role::find($id);
        $role->delete();
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

    }
}
