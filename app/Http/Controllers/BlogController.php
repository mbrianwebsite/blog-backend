<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Error;

use function PHPUnit\Framework\throwException;

class BlogController extends Controller
{
    public function index(){
        // dd(Blog::latest()->filter(request(['search','category','user']))->get());
        return view('blog',[
            'title' => "All Post",
            'posts' => Blog::latest()->filter(request(['search','category','user']))->paginate(3)->withQueryString(),
            
        ]);
    }

    public function single(Blog $blog){
        return view('post',[
            "title" => "Post",
            "post" => $blog
        ]);
    }

    public function showCategories(){
        // @dd(Category::all());
        return view('categories',[
            "title" => "Categories",
            "categories"  => Category::all()
        ]);
    }

    public function showCategory(Category $category){
        return view('blog',[
            "title" => "Post by Category : $category->name",
            "category"  => $category->name,
            "posts"  => $category->blog->load('user','category')
        ]);
    }

    public function showAuthorBlog(User $user){
        return view('blog',[
            "title" => "Post By Author : $user->name",
            "posts" => $user->blog->load('user','category')
        ]);
    }

}
