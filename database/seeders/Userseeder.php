<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
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
        $data = new User();
        $data->name = $faker->name;
        $data->email = $faker->email;
        $data->password = Hash::make($faker->word);
        $data->status = $faker->boolean;
        $data->save();
        }
    }
}
