<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.pages.blog.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'content_en' => 'required',
            'content_ar' => 'required',
            'title_ar' => 'required',
            'title_en' => 'required',
            'short_description_ar' => 'required',
            'short_description_en' => 'required',
            'main_category_id' => 'required',


        ]);


        if ($request->hasFile('image')) {


            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/main/news/image'), $imageName);
            $imageName = 'uploads/main/news/image/' . $imageName;


        }


        $blog = Blog::create([
            'title' => ['ar' => $request->title_ar, 'en' => $request->title_en],
            'containt' => ['ar' => $request->content_ar, 'en' => $request->content_en],
            'short_description' => ['ar' => $request->short_description_ar, 'en' => $request->short_description_en],
            'status' => $request->status,
            'image' => $imageName,
            'main_category_id' => $request->main_category_id,
            'slug' => $request->title_ar . '-' . time() . '-' . $request->title_en,

        ]);


        $blog->save();


        // return $submenu;
        return redirect()->back()->with('success', translate('done') . '' . '' . translate('successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $article = Blog::where('slug', $slug)->first();
        return view('admin.pages.blog.edit', compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'content_en' => 'required',
            'content_ar' => 'required',
            'title_ar' => 'required',
            'title_en' => 'required',
            'short_description_ar' => 'required',
            'short_description_en' => 'required',


        ]);

        $article = Blog::find($id);
        if ($request->hasFile('image')) {


            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/main/news/image'), $imageName);
            $imageName = 'uploads/main/news/image/' . $imageName;
            $article->image=$imageName;
            $article->save();

        }


        $article->update([
            'title' => ['ar' => $request->title_ar, 'en' => $request->title_en],
            'containt' => ['ar' => $request->content_ar, 'en' => $request->content_en],
            'short_description' => ['ar' => $request->short_description_ar, 'en' => $request->short_description_en],
            'status' => $request->status,
            'main_category_id' => $request->main_category_id,]);




        // return $submenu;
        return redirect()->back()->with('success', translate('done') . '' . '' . translate('successfully'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Blog::where('id', $id)->first();


        return redirect()->back()->with('success', translate('done') . '' . '' . translate('successfully'));

    }
}
