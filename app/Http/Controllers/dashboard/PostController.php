<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('created_at','desc')->paginate(20);
        return view('admin.posts.listpost',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.addpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Post $post)
    {

         $request->validate([
         'title'=>'required|unique:posts',
         'body'=>'required|string',
         'feature'=>'required',
         'view'=>'required',
         'image'=>'required'
        ]);

        $post->title = $request->title;
        $post->slug = str_replace(' ','_',$post->title);
        $post->body = $request->body;
        $post->feature = $request->feature;
        $post->view = $request->view;
        $post_image  =$request->file('image');
        $file_name = $post->title.time().'.'.$post_image->extension();
        $post_image->move('post_images',$file_name);
        $post->post_image = $file_name;
        $post->save();
        return redirect()->back()->with('success',' the post has been added successful !');
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
    public function edit(Post $post)
    {
       return view('admin.posts.updatepost',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // dd($post);
        $request->validate([
            'title'=>'required|unique:posts,title,'.$post->id,
            'body'=>'required|string',
            'feature'=>'required',
            'view'=>'required',
           ]);

        $post->title = $request->title;

        $post->slug = str_replace(' ','_',$post->title);
        $post->body = $request->body;
        $post->feature = $request->feature;
        $post->view = $request->view;

        if($request->file != null){
         $post_image  =$request->file('image');
         $file_name = $post->title.time().'.'.$post_image->extension();
         $post_image->move('post_images',$file_name);
         $post->post_image = $file_name;
        }


        $post->save();
        return redirect()->route('post.index')->with('success',' The post has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
       $post->delete();
       return redirect()->route('post.index')->with('success','The post has been successfully deleted !');
    }
}
