<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
class PagesController extends Controller
{

    public function about()
    {
        return view('front.pages.about');
    }

    public function location()
    {
        return view('front.pages.location');
    }

    public function user()
    {
        return view('front.pages.users');
    }

    public function contact()
    {
        return view('front.contact');
    }
    public function signup()
    {
        return view('front.signup');
    }

    public function blog()
    {
        return view('front.pages.blog');
    }

    public function news()
    {
        return view('front.pages.news');
    }

    public function article()
    {
        return view('front.pages.articles');
    }

    public function services()
    {
        return view('front.pages.services');
    }

    public function demo()
    {
        return view('front.pages.demo');
    }

    public function loans()
    {
        return view('front.pages.loans');
    }

    public function scb()
    {
        return view('front.pages.loans_scb');
    }

    





}
