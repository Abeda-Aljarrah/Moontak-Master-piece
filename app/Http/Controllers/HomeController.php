<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Plan;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function show()
    {
        $categories = Category::all();
    $plans = Plan::all();

    return view('pages.index', compact('categories', 'plans'));
    }

}
