<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function all_blogs()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(10);
        $categories = BlogCategory::all();
        return view('blogs.all', compact('blogs', 'categories'));
    }

    public function category($id, $slug)
    {
        $category = BlogCategory::with('blogs')->findOrFail($id);
        $blogs = $category->blogs()->paginate(10);
        $categories= BlogCategory::all();
        return view('blogs.all', compact('blogs', 'categories'));
    }
    
    public function single_blog($id, $slug)
    {
        $blog = Blog::findOrFail($id);
        $blogs = Blog::where("id", '<>', $id)->take(2)->orderBy("id", 'desc')->get();
        return view("blogs.single", compact("blog", "blogs"));
    }
    
    
    public function all_news()
    {
        $blogs = News::orderBy('id', 'desc')->paginate(10);
        $categories = NewsCategory::all();
        return view('news.all', compact('blogs', 'categories'));
    }

    public function categoryN($id, $slug)
    {
        $category = NewsCategory::with('news')->findOrFail($id);
        $blogs = $category->news()->paginate(10);
        $categories= NewsCategory::all();
        return view('news.all', compact('blogs', 'categories'));
    }
    
    public function single_news($id, $slug)
    {
        $blog = News::findOrFail($id);
        $blogs = News::where("id", '<>', $id)->take(2)->orderBy("id", 'desc')->get();
        return view("news.single", compact("blog", "blogs"));
    }
}
