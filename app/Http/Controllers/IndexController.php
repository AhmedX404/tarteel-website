<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('website.layouts.index');
    }
    public function arabic()
    {
        return view('website.layouts.index_ar');
    }
}
