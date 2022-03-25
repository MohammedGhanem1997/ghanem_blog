<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_article(Request $request)
    {
        $article=Blog::where('status',1)->where('slug',$request->slug)->first();

if (isset($article)){
    return view('user.blog.show',compact('article'));

}else{

    return redirect()->back()->with('message',' لا يوجد نتائج لهذا البحث');

}

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function category($slug)
    {
        $category=MainCategory::where('slug',$slug)->where('status',1)->first();

       $articles=Blog::where('main_category_id',$category->id)->orderBy('created_at', 'DESC')->paginate(6);
        return view('user.category.articles',compact('category','articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article=Blog::where('status',1)->where('slug',$slug)->first();
        $article->seen=$article->seen+1;
        $article->save();
        return view('user.blog.show',compact('article'));
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
