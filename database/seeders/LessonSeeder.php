<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Lesson::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $courses = Course::pluck('id')->toArray();

        $LessonSeeder = [
            ["course_id"=>$courses[0],"title"=>"Lesson 1","content"=>"Content 1","order"=>1],
            ["course_id"=>$courses[0],"title"=>"Lesson 2","content"=>"Content 2","order"=>2],
            ["course_id"=>$courses[0],"title"=>"Lesson 3","content"=>"Content 3","order"=>3],

            ["course_id"=>$courses[1],"title"=>"Lesson 1","content"=>"Content 1","order"=>1],
            ["course_id"=>$courses[1],"title"=>"Lesson 2","content"=>"Content 2","order"=>2],
            ["course_id"=>$courses[1],"title"=>"Lesson 3","content"=>"Content 3","order"=>3],

            ["course_id"=>$courses[2],"title"=>"Lesson 1","content"=>"Content 1","order"=>1],
            ["course_id"=>$courses[2],"title"=>"Lesson 2","content"=>"Content 2","order"=>2],
            ["course_id"=>$courses[2],"title"=>"Lesson 3","content"=>"Content 3","order"=>3],

            ["course_id"=>$courses[3],"title"=>"Lesson 1","content"=>"Content 1","order"=>1],
            ["course_id"=>$courses[3],"title"=>"Lesson 2","content"=>"Content 2","order"=>2],
            ["course_id"=>$courses[3],"title"=>"Lesson 3","content"=>"Content 3","order"=>3],

            ["course_id"=>$courses[4],"title"=>"Lesson 1","content"=>"Content 1","order"=>1],
            ["course_id"=>$courses[4],"title"=>"Lesson 2","content"=>"Content 2","order"=>2],
            ["course_id"=>$courses[4],"title"=>"Lesson 3","content"=>"Content 3","order"=>3],

            ["course_id"=>$courses[5],"title"=>"Lesson 1","content"=>"Content 1","order"=>1],
            ["course_id"=>$courses[5],"title"=>"Lesson 2","content"=>"Content 2","order"=>2],
            ["course_id"=>$courses[5],"title"=>"Lesson 3","content"=>"Content 3","order"=>3],

            ["course_id"=>$courses[6],"title"=>"Lesson 1","content"=>"Content 1","order"=>1],
            ["course_id"=>$courses[6],"title"=>"Lesson 2","content"=>"Content 2","order"=>2],
            ["course_id"=>$courses[6],"title"=>"Lesson 3","content"=>"Content 3","order"=>3],

            ["course_id"=>$courses[7],"title"=>"Lesson 1","content"=>"Content 1","order"=>1],
            ["course_id"=>$courses[7],"title"=>"Lesson 2","content"=>"Content 2","order"=>2],
            ["course_id"=>$courses[7],"title"=>"Lesson 3","content"=>"Content 3","order"=>3],

            ["course_id"=>$courses[8],"title"=>"Lesson 1","content"=>"Content 1","order"=>1],
            ["course_id"=>$courses[8],"title"=>"Lesson 2","content"=>"Content 2","order"=>2],
            ["course_id"=>$courses[8],"title"=>"Lesson 3","content"=>"Content 3","order"=>3],

            ["course_id"=>$courses[9],"title"=>"Lesson 1","content"=>"Content 1","order"=>1],
            ["course_id"=>$courses[9],"title"=>"Lesson 2","content"=>"Content 2","order"=>2],
            ["course_id"=>$courses[9],"title"=>"Lesson 3","content"=>"Content 3","order"=>3],
        ];

        Lesson::insert($LessonSeeder);
    }
}
