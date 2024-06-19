<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->sentence(5);
            $newProject->description = $faker->text(500);
            $newProject->link = $faker->url;
            $newProject->thumb = $faker->imageUrl(360, 360, 'placeholder', true,);
            $newProject->technologies = $faker->randomElement(['HTML', 'CSS', 'JavaScript', 'VUE.js', 'PHP', 'Laravel']);
            $newProject->slug = Str::slug($newProject->title);
            // dd($newProject);
            $newProject->save();
        }
    }
}
