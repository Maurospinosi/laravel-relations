<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('isbn', 13)->unique();
            $table->string('title', 70);
            $table->string('original_title', 70)->nullable();
            $table->string('publisher', 50)->nullable();
            $table->year('year');
            $table->string('language', 2);
            $table->smallInteger('number');
            $table->smallInteger('pages');
            $table->float('price', 6,2);
            $table->boolean('color')->default(false);
            $table->string('img_cover')->nullable()->defalut('https://via.placeholder.com/200x300');
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
        Schema::dropIfExists('comics');
    }
}