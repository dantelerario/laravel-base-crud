<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // //sample data
        // $students = [
        //     ['name' => 'Paolo duzioni',
        //      'gender' => 'm',
        //      'description' => 'asdjasd',
        //      'age' => 33,
        //     ],
        //     ['name' => 'Dante Lerario',
        //      'gender' => 'm',
        //      'description' => 'asdasdasdjasd',
        //      'age' => 36,
        //     ],
        //     ['name' => 'Calo Rossi',
        //     'gender' => 'm',
        //     'description' => 'test',
        //     'age' => 22,
        //     ],
        //     ['name' => 'Carla Bianchi',
        //     'gender' => 'f',
        //     'description' => 'test test',
        //     'age' => 23,
        //     ],
        // ];
    
        // foreach ($students as $student) {
        //     $newStudent = new Student();
        //     $newStudent->fill($student);
        //     $newStudent->save();
        // }

        /**
         * FAKER SECTION generatore random
         */
        Student::truncate();
        $records = 10;

        for ($i = 0; $i < $records; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            $genderShort = ($gender == 'male') ? 'm' : 'f';

            $newStudent = new Student();

            $newStudent->name = $faker->name($gender);
            $newStudent->gender = $genderShort;
            $newStudent->description = $faker->paragraph(3, true);
            $newStudent->age = $faker->numberBetween(18, 50);

            $newStudent->save();        
        }
    }
}
