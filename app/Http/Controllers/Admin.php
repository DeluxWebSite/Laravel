<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    protected function login()
    {
        return '<h1>Введите логин :<br> Введите пароль :</h1>';
    }

    public function create(Request $request)
    {
        // dd($request);
        if ($request->isMethod('post')) {
            $title = $request->input('title');
            $description = $request->input('content');
            //     $name=$request->
            //    if()
            return response()->redirectToRoute('admin.feedback');
        };
    }

    public function new()
    {
        return view('admin.news.create');
    }

    public function feedback()
    {
        return view('admin.news.feedback');
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}