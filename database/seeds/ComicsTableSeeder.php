<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10 ; $i++) { 

            $newComic = new Comic;

            $newComic->isbn = $faker->isbn13;
            $newComic->title = $faker->text(70);
            $newComic->original_title = $faker->text(70);
            $newComic->publisher = $faker->text(50);
            $newComic->year = $faker->year();
            $newComic->language = $faker->languageCode;
            $newComic->number = $faker->numberBetween(1,250);
            $newComic->pages = $faker->numberBetween(1,250);
            $newComic->price = $faker->randomFloat(2, 1,1000);
            $newComic->color = $faker->boolean;
            $newComic->img_cover = $faker->imageUrl(200,300);

            $newComic->save();
        }
    }
}