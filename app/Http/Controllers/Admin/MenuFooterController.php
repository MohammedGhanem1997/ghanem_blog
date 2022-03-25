<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuFooter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class MenuFooterController extends Controller
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
        return view('admin.pages.menu_footer.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.menu_footer.create');
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
        $imageName=null;
        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/menu_footer/image'), $imageName);
            $imageName= 'uploads/menu_footer/image'. $imageName;
        }
        $iconName=null;

        if ($request->hasFile('icon')) {


            $iconName = time() . '.' . $request->icon->extension();

            $request->icon->move(public_path('uploads/menu_footer/icon'), $iconName);
            $iconName='uploads/menu_footer/icon'.$iconName ;
        }

        $create=MenuFooter::create([
            'name'=>['ar'=>$request->name_ar,'en'=>$request->name_en],
            'icon'=>$iconName,
            'image'=>$imageName,
            'url'=>$request->url,
            'status'=>$request->status,
            'menu_id'=>$request->menu_id,

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
        $menu=MenuFooter::where('slug',$slug)->first();
        return view('admin.pages.menu_footer.edit',compact('menu'));

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
        $menu=MenuFooter::find($id);
        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/menu_footer/image'), $imageName);
            $imageName= 'uploads/menu_footer/image/'. $imageName;
            $menu->image= $imageName;
        }


        if ($request->hasFile('icon')) {


            $iconName = time() . '.' . $request->icon->extension();

            $request->icon->move(public_path('uploads/menu_footer/icon'), $iconName);
            $iconName='uploads/menu_footer/icon/'.$iconName ;
            $menu->icon= $iconName;

        }


        $menu->name=['ar'=>$request->name_ar,'en'=>$request->name_en];
              $menu->url=$request->url;
              $menu->status=$request->status;
              $menu->menu_id=$request->menu_id;
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
        $menu=MenuFooter::find($id)->delete();
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));
    }
}
