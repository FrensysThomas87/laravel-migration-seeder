<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Videogame;

class VideogamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $newVideogame = new Videogame();
            $newVideogame->title = $faker->name();
            $newVideogame->cover = 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.gamerclick.it%2Fimmagini%2Fvideogame%2FStreets_of_Rage_2%2Fcover%2FStreets_of_Rage_2-cover.jpg&imgrefurl=https%3A%2F%2Fwww.gamerclick.it%2Fgame%2F21027%2Fstreets-of-rage-2&tbnid=15AWJJUiIAd1kM&vet=12ahUKEwjQ24msns7vAhUPOuwKHVsQBQ8QMygJegUIARCqAQ..i&docid=4rU4K1Ykh7wKBM&w=640&h=888&q=street%20of%20rage%202&ved=2ahUKEwjQ24msns7vAhUPOuwKHVsQBQ8QMygJegUIARCqAQ';
            $newVideogame->console = $faker->name();
            $newVideogame->year = rand(1000, 2000);
            $newVideogame->rating = rand(5, 10);
            $newVideogame->save();
        }
    }
}
