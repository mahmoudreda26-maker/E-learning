<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $AdminSeeder =
            [
                [
                    "name" => "Mahmoud Reda",
                    "email" => "admin@gmail.com",
                    "password" => Hash::make("mahmoud465"),
                    "role" => "admin"
                ],
                [
                    "name" => "Anas Reda",
                    "email" => "Anasreda5@gmail.com",
                    "password" => Hash::make("Anas465"),
                    "role" => "student"
                ],
                [
                    "name" => "Tamim Reda",
                    "email" => "Tamimreda5@gmail.com",
                    "password" =>Hash::make("Tamim465"),
                    "role" => "instructor"
                ],
            ];
          User::insert($AdminSeeder);
    }
}
