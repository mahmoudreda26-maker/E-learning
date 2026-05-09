<?php

namespace Database\Seeders;

use App\Models\CourseProgress;
use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseProgressSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        CourseProgress::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $students = User::where('role','student')->pluck('id')->toArray();
        $courses = Course::pluck('id')->toArray();

        $CourseProgressSeeder = [
            ["user_id"=>$students[0],"course_id"=>$courses[0],"progress"=>20,"completed"=>0],
            ["user_id"=>$students[1],"course_id"=>$courses[1],"progress"=>50,"completed"=>0],
            ["user_id"=>$students[2],"course_id"=>$courses[2],"progress"=>70,"completed"=>0],
            ["user_id"=>$students[3],"course_id"=>$courses[3],"progress"=>100,"completed"=>1],
            ["user_id"=>$students[4],"course_id"=>$courses[4],"progress"=>30,"completed"=>0],
            ["user_id"=>$students[5],"course_id"=>$courses[5],"progress"=>80,"completed"=>0],
            ["user_id"=>$students[6],"course_id"=>$courses[6],"progress"=>90,"completed"=>0],
            ["user_id"=>$students[7],"course_id"=>$courses[7],"progress"=>60,"completed"=>0],
            ["user_id"=>$students[8],"course_id"=>$courses[8],"progress"=>40,"completed"=>0],
            ["user_id"=>$students[9],"course_id"=>$courses[9],"progress"=>100,"completed"=>1],
        ];

        CourseProgress::insert($CourseProgressSeeder);
    }
}
