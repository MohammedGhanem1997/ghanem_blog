<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.role.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           $employee=Employee::find($request->id);

        $role1 = Role::create(['guard_name' => 'employee','name' => $employee->name,'status'=>$request->status]);

        foreach ($request->permissions as $permission){

            $role1->givePermissionTo($permission);
        }
        $employee->assignRole($role1);

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
       $role= Role::where('name',$id)->first();

//       return $role->permissions;

        return view('admin.pages.role.edit',compact('role'));

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


        $employee=Employee::find($request->id);
        $role= Role::find($id);
        $role->delete();
        $role1 = Role::create([ 'guard_name' => 'employee','name' => $employee->name,'status'=>$request->status]);
        foreach ($request->permissions as $permission){

            $role1->givePermissionTo($permission);
        }

        $employee->assignRole($role1);
        foreach ($request->permissions as $permission){


            $role->givePermissionTo($permission,);
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
