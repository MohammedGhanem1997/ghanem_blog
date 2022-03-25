<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class SliderController extends Controller
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
    public function index()
    {
        return view('admin.pages.slider.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.slider.create');

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
            'title_ar' => 'required',
            'title_en' => 'required',

        ]);

        $imageName=null;
        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/slider/image'), $imageName);
            $imageName='uploads/slider/image/'.$imageName;
        }



        $create= Slider::create([
            'title'=>['ar'=>$request->title_ar,'en'=>$request->title_en],
            'description'=>['ar'=>$request->content_ar,'en'=>$request->content_en],
            'image'=>$imageName,
            'visible'=>$request->status,
            'slug'=>$request->title_ar.$request->title_en.time(),


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
        $slider=Slider::where('slug',$slug)->first();
        return view('admin.pages.slider.edit',compact('slider'));
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
        $request->validate([

            'title_ar' => 'required',
            'title_en' => 'required',

        ]);

        $slider=Slider::where('id',$id)->first();

        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/slider/image'), $imageName);
            $imageName='uploads/slider/image/'.$imageName;
            $slider->image=$imageName;
        }




        $slider->title=['ar'=>$request->title_ar,'en'=>$request->title_en];
        $slider->description=['ar'=>$request->content_ar,'en'=>$request->content_en];
        $slider->visible =$request->status;
        $slider->save();

        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $slider=Slider::where('slug',$slug)->first()->delete;
        return view('admin.pages.slider.edit',compact('slider'));
    }
}
