<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Plan;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {

        return view('pages.test');
    }
    public function show()
    {
        $categories = Category::all();
        $plans = Plan::all();

        return view('pages.index', compact('categories', 'plans'));
    }
    public function contact()
    {

        return view('pages.contact');
    }
    public function about()
    {
        return view('pages.about-us');
    }
}
