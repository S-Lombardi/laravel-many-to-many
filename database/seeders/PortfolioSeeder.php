<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Importo Faker
use Faker\Generator as Faker;

//importo il Model!!!!!!
use App\Models\Portfolio;


use Faker\Provider\en_US\Person;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){

            $work = new Portfolio();

            $work->title = $faker->words(3,true);
            $work->image = $faker->imageUrl(640, 480, 'animals', true);
            $work->back_ender = $faker->name();
            $work->link = $faker->url();
            $work->description = $faker->paragraph();
            $work->back_ender = $faker->name();
            $work->front_ender = $faker->name();
            $work->ux = $faker->name();
            $work->ui = $faker->name();
            $work->illustrator = $faker->name();

            $work->save();
    
        }
    }
}
