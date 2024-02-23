<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function about()
    {
        return view('site.about');
    }

    public function project()
    {
        return view('site.project');
    }

    public function projectDetail()
    {
        return view('site.project-detail');
    }

    public function services()
    {
        return view('site.services');
    }

    public function contact()
    {
        return view('site.contact');
    }
}
