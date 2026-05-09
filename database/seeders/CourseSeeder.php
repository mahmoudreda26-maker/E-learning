<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Course::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $instructors = User::where('role','instructor')->pluck('id')->toArray();
        $categories = Category::pluck('id')->toArray();

        $CourseSeeder = [
            [
                "user_id"=>$instructors[0],
                "category_id"=>$categories[0],
                "title"=>"Laravel Basics",
                "description"=>"Intro to Laravel",
                "level"=>"beginner",
                "is_published"=>1
            ],
            [
                "user_id"=>$instructors[1],
                "category_id"=>$categories[1],
                "title"=>"UI Design",
                "description"=>"UI/UX basics",
                "level"=>"beginner",
                "is_published"=>1
            ],
            [
                "user_id"=>$instructors[0],
                "category_id"=>$categories[2],
                "title"=>"Marketing 101",
                "description"=>"Marketing basics",
                "level"=>"beginner",
                "is_published"=>1
            ],
            [
                "user_id"=>$instructors[1],
                "category_id"=>$categories[3],
                "title"=>"Business Basics",
                "description"=>"Business intro",
                "level"=>"beginner",
                "is_published"=>1
            ],
            [
                "user_id"=>$instructors[0],
                "category_id"=>$categories[4],
                "title"=>"Data Science Intro",
                "description"=>"Data basics",
                "level"=>"beginner",
                "is_published"=>1
            ],
            [
                "user_id"=>$instructors[1],
                "category_id"=>$categories[5],
                "title"=>"AI Basics",
                "description"=>"AI intro",
                "level"=>"beginner",
                "is_published"=>1
            ],
            [
                "user_id"=>$instructors[0],
                "category_id"=>$categories[6],
                "title"=>"Web Development",
                "description"=>"Full stack",
                "level"=>"intermediate",
                "is_published"=>1
            ],
            [
                "user_id"=>$instructors[1],
                "category_id"=>$categories[7],
                "title"=>"Mobile Apps",
                "description"=>"Android iOS",
                "level"=>"intermediate",
                "is_published"=>1
            ],
            [
                "user_id"=>$instructors[0],
                "category_id"=>$categories[8],
                "title"=>"Cyber Security",
                "description"=>"Security basics",
                "level"=>"advanced",
                "is_published"=>1
            ],
            [
                "user_id"=>$instructors[1],
                "category_id"=>$categories[9],
                "title"=>"Soft Skills",
                "description"=>"Communication",
                "level"=>"beginner",
                "is_published"=>1
            ],
        ];

        Course::insert($CourseSeeder);
    }
}
