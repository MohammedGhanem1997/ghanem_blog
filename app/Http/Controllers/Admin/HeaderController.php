<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\SiteControl;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class HeaderController extends Controller
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
    public function social()
    {
        return view('admin.pages.header.headersetting');
    }

    public function social_post(Request $request)
    {
     //   return $request->icon[4];

$i=0;
        foreach ($request->name as $item){
           $element= Social::where('name',$item)->first();
            $element->url=$request->social[$i];

            if (!empty($request->icon[$i]) ){
                $imageName = time().'.'.$i.$request->icon[$i]->extension();
                $request->icon[$i]->move(public_path('uploads/social'), $imageName);
                $imageName='uploads/social/'.$imageName;
                $element->icon=$imageName;
            }
            $element->save();
            $i++;
        }

        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logo()
    {

        return view('admin.pages.header.logo');

    }

    public function address()
    {

        return view('admin.pages.header.address');
    }
    public function email()
    {

        return view('admin.pages.header.email');
    }

    public function logopost( Request $request)
    {

        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/logo'), $imageName);
            $imageName='uploads/logo/'.$imageName;


            $logo=SiteControl::first();
            $logo->logo=$imageName;
            $logo->save();

        }
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));


    }
    public function private($id)
    {
        $page=Page::find(1);

        return view('admin.pages.page.edit')->with('page',$page);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function phone_post( Request $request)
    {
          $site=SiteControl::first();
        $site->phone=$request->phone;
        $site->mobile=$request->mobile;
        $site->save();
        return redirect()->back()->with('success','done');

    }
    public function email_post( Request $request)
    {
        $site=SiteControl::first();
        $site->email=$request->email;
        $site->save();
        return redirect()->back()->with('success','done');

    }
    public function address_post( Request $request)
{
    $site=SiteControl::first();
    $site->address=['ar'=>$request->address_ar , 'en'=>$request->address_en]   ;
    $site->save();
    return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

}
public function site_post( Request $request)
{
    $site=SiteControl::first();
    $site->site_name=['ar'=>$request->title_ar , 'en'=>$request->title_en]   ;
    $site->save();
    return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function phone()
    {
        return view('admin.pages.header.phons');
    }
    public function seo()
    {
        return view('admin.pages.seo.general');
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
