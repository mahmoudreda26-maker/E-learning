<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Category::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $categories = [
            ["name" => "Programming", "description" => "Coding courses"],
            ["name" => "Design", "description" => "UI/UX Design"],
            ["name" => "Marketing", "description" => "Digital Marketing"],
            ["name" => "Business", "description" => "Business courses"],
            ["name" => "Data Science", "description" => "Data & AI"],
            ["name" => "Mobile Development", "description" => "Apps development"],
            ["name" => "Cyber Security", "description" => "Security courses"],
            ["name" => "Web Development", "description" => "Frontend & Backend"],
            ["name" => "Soft Skills", "description" => "Communication skills"],
            ["name" => "AI", "description" => "Artificial Intelligence"],
        ];

        Category::insert($categories);
    }
}
