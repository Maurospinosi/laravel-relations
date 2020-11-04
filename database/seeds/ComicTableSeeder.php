<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\ Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i=0; $i<21; $i++){
            $newComic = new Comic;
            $newComic->title = $faker->text(50);
            $newComic->author = $faker->name();
            $newComic->number = $faker->numberBetween(1, 1000);
            $newComic->pages = $faker->numberBetween(20, 400);
            $newComic->edition = $faker->company();
            $newComic->genre = $faker->text(50);
            $newComic->cover = $faker->imageUrl(200,300);
            $newComic->reading =  (rand(0,2) == 1) ?  'ltr' : 'rtl';
            $newComic->price = $faker->randomFloat(2, 1, 9999);
            $newComic->color = rand(0,1);
            $newComic->realase_date = $faker->year();
            $newComic->save();
        }
        
    }
}
