<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function locations()
    {
        return view('locations');
    }
    public function contactUs()
    {
        return view('contact-us');
    }

    public function freeEstimation() {
        return view('free-estimation');
    }
}
