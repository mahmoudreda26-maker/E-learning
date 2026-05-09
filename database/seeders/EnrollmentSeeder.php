<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollmentSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Enrollment::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $students = User::where('role','student')->pluck('id')->toArray();
        $courses = Course::pluck('id')->toArray();

        $EnrollmentSeeder = [
            ["user_id"=>$students[0],"course_id"=>$courses[0],"enrolled_at"=>now()],
            ["user_id"=>$students[1],"course_id"=>$courses[1],"enrolled_at"=>now()],
            ["user_id"=>$students[2],"course_id"=>$courses[2],"enrolled_at"=>now()],
            ["user_id"=>$students[3],"course_id"=>$courses[3],"enrolled_at"=>now()],
            ["user_id"=>$students[4],"course_id"=>$courses[4],"enrolled_at"=>now()],
            ["user_id"=>$students[5],"course_id"=>$courses[5],"enrolled_at"=>now()],
            ["user_id"=>$students[6],"course_id"=>$courses[6],"enrolled_at"=>now()],
            ["user_id"=>$students[7],"course_id"=>$courses[7],"enrolled_at"=>now()],
            ["user_id"=>$students[8],"course_id"=>$courses[8],"enrolled_at"=>now()],
            ["user_id"=>$students[9],"course_id"=>$courses[9],"enrolled_at"=>now()],
        ];

        Enrollment::insert($EnrollmentSeeder);
    }
}
