<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Self_;
use App\Models\News;

class Newscontrollers extends Controller
{


    public function news()
    {


        // $item = News::find('4');
        // dd($item->category->news);

        $news = News::all();

        // foreach ($news as $item) {
        //     dump($item->category->name);
        // }

        // $news = (new News())->getNews();


        return view("news", ['news' => $news]);
    }

    public function list(int $CategoryId)
    {

        return view('list', ['news' => News::getByCategoryId($CategoryId)]);
    }

    public function newsOne($id)
    {

        $item = News::find($id);
        // $news = (new News())->newsOne($id);

        return view("newsOne", ['item' => $item]);
    }
}