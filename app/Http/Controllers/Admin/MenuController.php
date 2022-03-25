<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Session;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class MenuController extends Controller
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
     return view('admin.pages.menu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {

        return view('admin.pages.menu.createMenu');
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

            'image' => 'mimes:jpg,png,jpeg|max:2048',
            'icon' => 'mimes:jpg,png,jpeg|max:2048',
            'name_ar' => 'required',
            'name_en' => 'required',

        ]);
        $url=$request->url==null?'#':$request->url;
        $imageName=null;
        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/menu/image'), $imageName);
            $imageName='uploads/menu/image/'.$imageName;
        }
        $iconName=null;

        if ($request->hasFile('icon')) {


            $iconName = time() . '.' . $request->icon->extension();

            $request->icon->move(public_path('uploads/menu/icon'), $iconName);
            $iconName = 'uploads/menu/icon/'. $iconName;
        }

      $create= Menu::create([
            'name'=>['ar'=>$request->name_ar,'en'=>$request->name_en],
             'icon'=>$iconName,
            'image'=>$imageName,
            'url'=>$url,
            'navigation_bar_id'=>$request->navigation_bar_id,
          'status'=>$request->status,

        ]);
        $slug=$request->name_ar. $create->id.$request->name_en;
        $create->slug=$slug;
        $create->save();
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
    public function edit($slug)
    {
        $menu=Menu::where('slug', $slug)->first();
        return view('admin.pages.menu.edit',compact('menu'));

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
        $menu=Menu::find($id);
        $request->validate([

            'image' => 'mimes:jpg,png,jpeg|max:2048',
            'icon' => 'mimes:jpg,png,jpeg|max:2048',
            'name_ar' => 'required',
            'name_en' => 'required',

        ]);
        $url=$request->url==null?'#':$request->url;
        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/menu/image'), $imageName);
            $imageName='uploads/menu/image/'.$imageName;
            $menu->image=$imageName;
        }


        if ($request->hasFile('icon')) {


            $iconName = time() . '.' . $request->icon->extension();

            $request->icon->move(public_path('uploads/menu/icon'), $iconName);
            $iconName = 'uploads/menu/icon/'. $iconName;
            $menu->icon=$iconName;
        }


        $menu->name=['ar'=>$request->name_ar,'en'=>$request->name_en];

            $menu->url=$url;
            $menu->navigation_bar_id=$request->navigation_bar_id;
        $menu->save();

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
        $menu=Menu::find($id)->delete();
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

    }
}
