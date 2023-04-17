<?php

namespace Database\Seeders;

use App\Models\Postcomments;
use App\Models\TimelinePost;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostCommentSeeder extends Seeder
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
        $data = new Postcomments();
        $data->comment_text = $faker->text;
        $data->user_id = User::all()->random()->id;
        $data->post_id = TimelinePost::all()->random()->id;
        $data->save();
        }
    }
}
