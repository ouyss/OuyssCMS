<?php

namespace App\Http\Controllers\Home;

class IndexController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return view('index');
    }
}
