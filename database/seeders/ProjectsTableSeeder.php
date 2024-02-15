<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0 ; $i < 20 ; $i++){
            $newTypes = Type::inRandomOrder()->first();
            $newProjects = new Project();
            $newProjects->name= $faker->userName(10);
            $newProjects->surname= $faker->lastName(10);
            $newProjects->email=$faker->email();
            $newProjects->age= $faker->randomNumber(2,false);
            $newProjects->description=$faker->paragraph();
            $newProjects->img=$faker->image(null,640,480);
            $newProjects->frameworks=$faker->randomElement(["Laravel","React","Bootstrap","Angular","vue-js"]);
            $newProjects->language=$faker->randomElement(["HTML","CSS","JAVASCRIPT","PHP"]);
            $newProjects->title = $faker->word();
            $newProjects->type_id = $newTypes->id;
            $newProjects->save();
        }

    }
}
