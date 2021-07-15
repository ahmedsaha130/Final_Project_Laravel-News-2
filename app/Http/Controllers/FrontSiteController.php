<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontSiteController extends Controller
{
    public function showhome()

    {     $fetured =Post::where('view','view')->where('feature','feature')->get();
           $posts = Post::orderBy('created_at','desc')->where('view','view')->get();
         return view('frontsite.index',compact(['fetured','posts']));
    }

    public function showsingle($slug){

        $post = Post::where('slug',$slug)->first();

        $fetured =Post::where('view','view')->where('feature','feature')->get();
        // dd($post);
     return view('frontsite.single',compact(['post','fetured']));


    }



    public function showblog()

    {     $post = Post::orderBy('created_at','desc')->where('view','view')->paginate(15);
        return view('frontsite.blog',compact('post'));
    }

    public function showcontact()
    {  $contact = Contact::get();
         return view('frontsite.contact',compact('contact'));
    }
}
