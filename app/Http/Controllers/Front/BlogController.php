<?php

namespace App\Http\Controllers\Front;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\City;
use App\Models\Product;

class BlogController extends Controller
{

    public function blog()
    {
        $blog = Blog::all();
        $car_city = City::where('status', 'active')->orderBy('id', 'desc')->take(10)->get();
        $latest_cars = Product::orderBy('created_at', 'desc')->take(10)->get();
        return view('front.pages.blog')->with('blog',$blog)->withCity($car_city)->withLatest($latest_cars);
    }
    public function my_blog($id)
    {
        $my_blog = Blog::where('id', $id)->first();
        $car_city = City::where('status', 'active')->orderBy('id', 'desc')->take(10)->get();
        $latest_cars = Product::orderBy('created_at', 'desc')->take(10)->get();

        return view('front.pages.blog_view')->with('my_blog',$my_blog)->withCity($car_city)->withLatest($latest_cars);
    }

}
