<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;

class PostController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  post::all();
        return view('admin.post.list',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        $tags = tag::all();
        return view('admin.post.add', compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'slug'=>'required'
        ]);
        
        $post = new post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->sub_title = $request->sub_title;
        $post->image = $request->image;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->posted_by = 1;
        
        //return $post;
        $post->save();
        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        return redirect( route('post.index'));
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
        $post = post::with('tags','categories')->find($id);
        $categories = category::all();
        $tags = tag::all();
        return view('admin.post.edit', compact('post','tags','categories'));

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
        $this->validate($request,[
            'title'=>'required',
            'slug'=>'required'
        ]);
        
        $post = post::find($id)->first();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->sub_title = $request->sub_title;
        $post->image = $request->image;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->save();

        $post->categories()->sync($request->categories,$post->id);
        $post->tags()->sync($request->tags,$post->id);
        
        return redirect( route('post.index'));
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
