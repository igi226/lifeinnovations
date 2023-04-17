<?php

namespace Database\Seeders;

use App\Models\TimelinePost;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i<=20; $i++){
        $data = new TimelinePost();
        $data->slug = $faker->unique()->slug(3);
        $data->title = $faker->title;
        $data->user_id = User::all()->random()->id;
        $data->save();
        }
    }
}
