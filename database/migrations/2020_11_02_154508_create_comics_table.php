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
            $table->string('title', 50);
            $table->string('author', 50);
            $table->smallInteger('number');
            $table->smallInteger('pages');
            $table->string('edition', 50);
            $table->string('genre', 50);
            $table->string('cover')->dafault('https://via.placeholder.com/200x300');
            $table->string('reading', 3);
            $table->float('price', 6,2);
            $table->boolean('color', 3)->default(false);
            $table->year('realase_date');
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
