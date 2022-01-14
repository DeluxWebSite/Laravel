<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWord extends Controller
{
    public function hello()
    {
        return '<h1> <br>hello word! and hello for you!</h1>';
    }
}
