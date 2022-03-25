<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SideOrder;
use App\Models\translate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class SideOrderController extends Controller
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


    }    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.side-order.index');

    }
    public function sort()
    {
        return view('admin.pages.side-order.sort');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.side-order.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $translation=  translate::create([
            'title' => $request->name_en,
            'translate' => ['ar'=>$request->name_ar,'en'=>$request->name_en]
        ]);
        SideOrder::create([
            'name'=>$translation->title,
            'main'=>$request->main,
            'icon '=>$request->icon ,
            'range'=>$request->order,
            'status'=>$request->status,
            'url'=>$request->url,


        ]);
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatemenu(Request $request,$id)
    {


        $menu=SideOrder::find($id);

        $translation=  translate::create([
            'title' => $request->name_en,
            'translate' => ['ar'=>$request->name_ar,'en'=>$request->name_en]
        ]);

        $menu->name=$translation->title;
            $menu->main=$request->main;
            $menu->icon =$request->icon ;
            $menu->range=$request->order;
            $menu->status=$request->status;
        $menu->save();

        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu=SideOrder::where('name','like',$id)->first();


        return view('admin.pages.side-order.edit',compact('menu'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $Data = collect(json_decode($request->get('sort')));
$i=1;
//return $Data;

foreach ($Data as $sort) {

    $item = SideOrder::find($sort->id);
    $item->range = $i;
    $item->main = 0;
    $item->save();
    $i++;
    //children
    $j = 1;
    if (isset($sort->children)) {
        foreach ($sort->children as $son) {
            $sub = SideOrder::find($son->id);
            $sub->main = $item->id;
            $sub->range = $j;

            $sub->save();
            $j++;
            $x = 1;
            if (isset($son->children)) {
                foreach ($son->children as $son_son) {
                    $sub_son = SideOrder::find($son_son->id);
                    $sub_son->main = $sub->id;
                    $sub_son->range = $x;

                    $sub_son->save();
                    $x++;


                }


            }
        }
    }

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
        $menu=SideOrder::find($id);
        $menu->status==1? $menu->status=0 : $menu->status =1;

        $menu->save();
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

    }

    public function delete($id)
    {
        $menu=SideOrder::find($id)->delete();



        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

    }
}
