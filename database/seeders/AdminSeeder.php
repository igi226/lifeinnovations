<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            "name" => "Admin Lifeinnovations",
            "email" => "admin@mail.com",
            "password" => Hash::make("12345"),
            "slug" => "admin-lifeinnovations",
      
        ]);
    }
}
