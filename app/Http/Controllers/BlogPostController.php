<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


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
    public function add(Request $request)
    {

        $blogArticle = new BlogPost();

        $blogArticle->title = $request->title;
        $blogArticle->contenu = $request->contenu;
        $blogArticle->img = $request->img;

        $blogArticle->save();


        return redirect('/');
    }

    public function getAllBlogArticle()
    {
        $blogarticles = BlogPost::all();

        return response()->json([
            'blog_post'=> $blogarticles,
        ]);


    }

    public function getArticle($id){

        $blogarticle = BlogPost::find($id);
        
        return response()->json([
            'blog_post'=> $blogarticle,
        ]);


    }

}
