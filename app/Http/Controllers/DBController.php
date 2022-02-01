<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DBController extends Controller
{
    public function index()
    {
        // \DB::statement('
        // CREATE TABLE test (
        //     id int PRIMARY KEY AUTO_INCREMENT,
        //     content varchar(50)
        // )');

        // $sql = "INSERT INTO test (content) VALUES (:connect)";
        // $result = \DB::insert($sql, [':connect' => 'test']);

        // $sql = "SELECT * FROM test";
        // $result = \DB::select($sql);
        // dd($result);
        // echo "готово!";

        $news = \DB::select('SELECT * FROM news');
        // $news = json_decode(json_encode($news), true);
        // dd($news);
        return view("news", ['news' => $news]);
    }
}