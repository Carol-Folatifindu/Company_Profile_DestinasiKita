<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('layout.homepage');
    }
    public function contact()
    {
        return view('layout.contact');
    }

    public function galeri()
    {
        return view('layout.galeri');
    }

    public function package()
    {
        return view('layout.package');
    }
}
