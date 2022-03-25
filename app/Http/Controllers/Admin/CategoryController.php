<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.pages.main-category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.main-category.create');

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

            'content_en' => 'required',
            'content_ar' => 'required',
            'name_ar' => 'required',
            'name_en' => 'required',


        ]);




        $imageName=null;
        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/main/main-category/image'), $imageName);
            $imageName='uploads/main/main-category/image/'.$imageName;
        }

        $category= MainCategory::create([
            'short_description'=>['ar'=>$request->content_ar,'en'=>$request->content_en],
            'name'=>['ar'=>$request->name_ar,'en'=>$request->name_en],
            'image'=>$imageName,

            'status'=>$request->status,

        ]);

        $category->slug= $category->name['ar'].'-'.$category->id.'-'.$category->name['en'];

        $category->save();

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
    public function edit($slug)
    {
        $category=MainCategory::where('slug',$slug)->first();
        return view('admin.pages.main-category.edit',compact('category'));

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

            'content_en' => 'required',
            'content_ar' => 'required',
            'name_ar' => 'required',
            'name_en' => 'required',


        ]);


        $category=MainCategory::find($id);


        if ($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/main/sub-category/image'), $imageName);
            $imageName='uploads/main/sub-category/image/'.$imageName;
            $category->image= $imageName;
        }

        $category->short_description=['ar'=>$request->content_ar,'en'=>$request->content_en];
        $category->name=['ar'=>$request->name_ar,'en'=>$request->name_en];
        $category->status=$request->status;




        $category->save();

        // return $submenu;
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
        $category=MainCategory::where('slug',$slug)->first()->delete();
        return redirect()->back()->with('success',translate('done').''.''.translate('successfully'));

    }
}
