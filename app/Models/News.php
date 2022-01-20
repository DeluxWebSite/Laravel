<?php

namespace App\Models;

class News
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


    public function getNews()
    {
        return $this->news;
    }

    public function getNewsById($id)
    {
        foreach ($this->news as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
        return [];
    }
    public function newsOne($id)
    {
        $news = (new News())->getNewsById($id);

        if (!empty($news)) {

            return $news;
        }
        return redirect('/news');
    }
}