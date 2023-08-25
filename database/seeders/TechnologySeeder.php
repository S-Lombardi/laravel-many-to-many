<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//importo il Model!!!!!!
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['Html', 'Css', 'Javascript', 'Php', 'Laravel', 'VueJs', 'JQuery', 'Sass','Symfony'];

        foreach($technologies as $tech){

            $new_tech = new Technology();
            $new_tech->tech_name = $tech;

            $new_tech->save();
        }

        

    }
}
