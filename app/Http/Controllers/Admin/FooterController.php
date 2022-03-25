<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Footer;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class FooterController extends Controller
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


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about_site()
    {
        return view('admin.pages.footer.about_site');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.footer.create');
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


            'description_ar' => 'required',
            'description_en' => 'required',

        ]);

      $submenu= Footer::first();


        $submenu->page_visible= $request->status;
            $submenu->description= ['ar'=>$request->description_ar,'en'=>$request->description_en];
$submenu->save();

        // return $submenu;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
