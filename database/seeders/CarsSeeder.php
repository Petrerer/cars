<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory;

use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("cars")->truncate();
        $faker=Factory::create();
        for($i=0;$i<100;$i++)
        {
            $data=["vin"=>$faker->unique()->randomNumber,"model"=>$faker->name,"description"=>$faker->unique()->text,"color"=>$faker->colorName(),"price"=>$faker->randomNumber, "brand_id"=>null];
            DB::table("cars")->insert($data);
        }
        
    }
}
