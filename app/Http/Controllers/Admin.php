<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    protected function login()
    {
        return '<h1>Введите логин :<br> Введите пароль :</h1>';
    }
}