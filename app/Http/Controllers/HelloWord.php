<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWord extends Controller
{
    public function hello()
    {
        return view('hello');
    }
}