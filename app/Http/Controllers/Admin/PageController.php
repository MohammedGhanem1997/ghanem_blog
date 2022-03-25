<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class PageController extends Controller
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
        return view('admin.pages.page.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\pages\page\create');
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

             'title_en' => 'required',
             'title_ar' => 'required',
             'name_ar' => 'required',
             'name_en' => 'required',


         ]);




        $imageName=null;
        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/page/image'), $imageName);
            $imageName='uploads/page/image/'.$imageName;
        }

      $page= Page::create([
            'title'=>['ar'=>$request->title_ar,'en'=>$request->title_en],
             'name'=>['ar'=>$request->name_ar,'en'=>$request->name_en],
             'image'=>$imageName,

            'status'=>$request->status,
            'content'=>['ar'=>$request->content_ar,'en'=>$request->content_en],

        ]);

        $page->url= $page->id.$page->name['ar'].$page->name['en'];

        $page->save();

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
        $page=Page::where('url',$id)->first();
        return view('admin.pages.page.edit',compact('page'));

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
        $page=Page::find($id);


        $request->validate([

            'title_en' => 'required',
            'title_ar' => 'required',
            'name_ar' => 'required',
            'name_en' => 'required',


        ]);




        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/page/image'), $imageName);
            $imageName='uploads/page/image/'.$imageName;
            $page->image=$imageName;
        }

            $page->title=['ar'=>$request->title_ar,'en'=>$request->title_en];
            $page->name=['ar'=>$request->name_ar,'en'=>$request->name_en];
            $page->content=['ar'=>$request->content_ar,'en'=>$request->content_en];
        $status=$request->status==null? 0:1;
            $page->status=$status;




        $page->save();

        // return $submenu;
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
        $page=Page::where('url',$id)->first()->delete();
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

    }
}
