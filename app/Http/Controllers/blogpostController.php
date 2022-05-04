<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index(){
        $blogarticles = BlogPost::all();

        return view('homePage', ['blogsarticles' => $blogarticles]);
    }

    public function delete($id)
    {
        BlogPost::find($id)->delete();

        return redirect('/');
    }

}
