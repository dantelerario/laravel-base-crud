<?php

use Illuminate\Database\Seeder;
use App\Lab;
use Faker\Generator as Faker;

class LabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Lab::truncate();
        $records = 10;

        for ($i = 0; $i < $records; $i++) {

            $newLab = new Lab();

            $newLab->lab_prof_name = $faker->name;
            $newLab->description = $faker->paragraph(2, true);

            $newLab->save(); 
        }  
    }
}
