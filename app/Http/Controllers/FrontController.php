<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
class FrontController extends Controller
{
    public function index(){

        $data=Blog::paginate(5);
        $latest_blog = Blog::latest()->first();
        $categories = Category::all();

        return view('welcome',compact('data','latest_blog','categories'));

    }
    public function detail($id)
    {
        $data = Blog::with('category')->find($id);
        $categories = Category::all();

       return view('frontend.detail',compact('data','categories'));
    }
}
