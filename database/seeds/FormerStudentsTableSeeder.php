<?php

use Illuminate\Database\Seeder;
use App\FormerStudent;
use Faker\Generator as Faker;

class FormerStudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        FormerStudent::truncate();
        $records = 50;

        for ($i = 0; $i < $records; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            $genderShort = ($gender == 'male') ? 'm' : 'f';

            $exStudent = new FormerStudent();

            $exStudent->name = $faker->name($gender);
            $exStudent->gender = $genderShort;
            $exStudent->description = $faker->paragraph(3, true);
            $exStudent->age = $faker->numberBetween(25, 60);
            $exStudent->company = $faker->company;

            $exStudent->save();    
        }    
    }
}
