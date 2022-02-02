<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BdNewsDz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_dz', function (Blueprint $table) {
            $table->id();
            $table->string('title', '100')
                ->unique()
                ->nullable(false)
                ->comment('Заголовок новости');
            $table->text('description', '255')
                ->nullable(false);
            $table->text('category', '50');
            $table->text('status', '50');
            $table->text('source', '255');
            $table->dateTime('Y-m-d');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
