<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $AdminSeeder = [

            // ================= ADMIN =================
            [
                "name" => "Mahmoud Reda",
                "email" => "admin@gmail.com",
                "password" => Hash::make("mahmoud465"),
                "role" => "admin"
            ],

            // ================= INSTRUCTORS (20) =================
            ["name" => "Omar Hassan", "email" => "omarhassan@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Ahmed Mostafa", "email" => "ahmedmostafa@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Mohamed Ali", "email" => "mohamedali@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Khaled Youssef", "email" => "khaledyoussef@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Hassan Ibrahim", "email" => "hassanibrahim@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Youssef Adel", "email" => "youssefadel@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Mahmoud Gamal", "email" => "mahmoudgamal@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Karim Salah", "email" => "karimsalah@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Tarek Nabil", "email" => "tareknabil@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Ehab Farouk", "email" => "ehabfarouk@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Mostafa Adel", "email" => "mostafaadel@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Abdullah Samir", "email" => "abdullahsamir@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Hossam El-Din", "email" => "hossameldin@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Amr Sherif", "email" => "amrsherif@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Ali Fathy", "email" => "alifathy@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Saif Ahmed", "email" => "saifahmed@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Ziad Mahmoud", "email" => "ziadmahmoud@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Fahd Khalil", "email" => "fahdkhalil@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Walid Hamdy", "email" => "walidhamdy@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            ["name" => "Sherif Adel", "email" => "sherifadel@gmail.com", "password" => Hash::make("123456"), "role" => "instructor"],
            // ================= STUDENTS (20) =================
            ["name" => "Ali Ahmed", "email" => "aliahmed@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Omar Samy", "email" => "omarsamy@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Youssef Tamer", "email" => "yousseftamer@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Mahmoud Saeed", "email" => "mahmoudsaeed@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Ahmed Gamal", "email" => "ahmedgamal@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Karim Adel", "email" => "karimadel@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Hassan Ali", "email" => "hassanali@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Tarek Mohamed", "email" => "tarekmohamed@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Ziad Ashraf", "email" => "ziadashraf@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Fares Nasser", "email" => "faresnasser@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Adham Hany", "email" => "adhamhany@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Hossam Yasser", "email" => "hossamyasser@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Salah Mostafa", "email" => "salahmostafa@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Amr Khaled", "email" => "amrkhaled@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Abdelrahman Ali", "email" => "abdelrahmanali@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Mohamed Hossam", "email" => "mohamedhossam@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Ali Tamer", "email" => "ali.amer@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Mostafa Ali", "email" => "mostafaali@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Eslam Ahmed", "email" => "eslamahmed@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
            ["name" => "Sherif Mohamed", "email" => "sherifmohamed@gmail.com", "password" => Hash::make("123456"), "role" => "student"],
        ];

        User::insert($AdminSeeder);
    }
}
