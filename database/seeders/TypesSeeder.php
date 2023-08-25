<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//importo il Model!!!!!!
use App\Models\Types;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['E-commerce', 'Magazine', 'Blog', 'Portal'];

        foreach($categories as $category){
            $type = new Types();

            $type->category = $category;
            
            
            DB::table('types')->insert([
                'category'=> $category,
                'mobile'=> false,
                'tablet'=> false,
                'pc'=> false,
                'smart_tv'=> false,
                'android'=> false,
                'ios'=> false,
                'windows'=> false,
                'mac'=> false,
                'linux'=> false,
                'age_protection'=> false,
                
            ]);
            
        }
        
    }
}
