<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Self_;
use App\Models\News;

class Newscontrollers extends Controller
{


    public function news()
    {
        $news = (new News())->getNews();


        return view("news", ['news' => $news]);
    }

    public function newsOne($id)
    {
        $news = (new News())->newsOne($id);

        return view("newsOne", ['news' => $news]);
    }
}