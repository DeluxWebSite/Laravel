<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Self_;

class News extends Controller
{
    private $news = [
        [
            'id' => 1,
            'title' => 'news 1',
            'description' => 'описание новости 1',
        ],
        [
            'id' => 2,
            'title' => 'news 2',
            'description' => 'описание новости 2',
        ],
        [
            'id' => 3,
            'title' => 'news 3',
            'description' => 'описание новости 3',
        ],
        [
            'id' => 4,
            'title' => 'news 4',
            'description' => 'описание новости 4',
        ],
        [
            'id' => 5,
            'title' => 'news 5',
            'description' => 'описание новости 5',
        ]

    ];

    public function news()
    {
        $html = "<h1>NEWS</h1>";

        foreach ($this->news as $news) {
            $html .=  "<h2><a href='/news/{$news['id']}>{$news['title']}</a></h2>
            <div>{$news['description']}</div>
            <hr>";
        }
        return $html;
    }

    public function newsOne($id)
    {
        $news = $this->getNewsById($id);

        if (!empty($news)) {
            $html = "<h1>{$news['title']}</h1>
                    <div>{$news['description']}</div>
                    <hr>
                    <a href='/news'>Назад</a>";
            return $html;
        }
        return redirect('/news');
    }

    private function getNewsById($id)
    {
        foreach ($this->news as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
        return [];
    }
}