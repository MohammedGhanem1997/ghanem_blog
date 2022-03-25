<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Method;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function __construct()
    {
        // dd(Role::findByName('محمد سيد محمد السيد', 'employee')->permissions);
        $routeArray = app('request')->route()->getAction();
        $controllerAction = $routeArray['controller'];

        list($controller, $action) = explode('@', $controllerAction);



        $roles= Role::all();

        foreach ($roles as $role){
            foreach ($role->users as $user) {
                if (Auth::guard('employee')->user()->id == $user->id && $role->name !='admin') {


//                    dd($role->users);
//                    $this->middleware('role:employee|admin', ['except' => ['show']]);

                    foreach ($role->permissions as $permission){


                        if ($controller == $permission->controller){

                            $this->middleware('permission:employee|'.$permission->method, ['except' => [$permission->method]]);

                        }


                    }


                }
                if ($role->name =='admin'){
                    $this->middleware('role:employee|admin', ['only' => ['show']]);

                }




            }

        }


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.pages.permission.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.permission.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[

            'name' => 'required|unique:permissions',
            'name_ar' => 'required',
            'method_name' => 'required',
            'controller' => 'required',

        ]);

       Permission::create([
           'name'=>$request->name,
           'name_ar'=>$request->name_ar,
           'guard_name'=>'employee',
           'method'=>$request->method_name,
           'status'=>$request->status,
           'controller'=>$request->controller,

       ]);

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
    public function edit($id)
    {
        $Permission= Permission::find($id);

        if ($Permission->status==1){
            $Permission->status=0;
        }
        else{
            $Permission->status=1;
        }
        $Permission->save();
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));


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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role= Permission::findById($id);
        $role->delete();
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));
    }
}
