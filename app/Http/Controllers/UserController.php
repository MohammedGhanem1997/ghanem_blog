<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\SiteControl;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitor=SiteControl::first();
        $seen=$visitor->visitor+1;


        $visitor->visitor=$seen;
        $visitor->save();
        $blog= Blog::where('status',1)->withCount('comments')->orderBy('created_at', 'DESC')->paginate(6);
        $top=$users = Blog::withCount('comments')->orderBy('comments_count', 'DESC')->paginate(6);

       return view('welcome',compact('blog','top'));
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
    public function comment(Request $request)
    {

        Comment::create($request->all());
       return redirect()->back();
    }

    public function search(Request $request)
    {
        $searchTerm = $request->search;
        if ($searchTerm != "" || $searchTerm != null) {

            $blog = Blog::where('title', 'LIKE', "%{$searchTerm}%")->orwhere('containt', 'LIKE', "%{$searchTerm}%")
                ->orwhere('short_description', 'LIKE', "%{$searchTerm}%")->get();
           // return redirect()->back()->with('message',' لا يوجد نتائج لهذا البحث');
//return $blog;

            if ($blog->count()>0)
            return view('user.blog.search',compact('blog'));
//            return redirect()->back();
        }
        else{
            return redirect()->back()->with('message',' لا يوجد نتائج لهذا البحث');

        }
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
