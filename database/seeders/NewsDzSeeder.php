<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class NewsDzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $generator)
    {
        \DB::table('news_dz')
            ->insert([
                'title' => $generator->text('100'),
                'description' => $generator->text('255'),
                'category' => $generator->text('50'),
                'status' => $generator->text('50'),
                'source' => $generator->url(),
                'Y-m-d' => $generator->dateTime()
            ]);
    }
}