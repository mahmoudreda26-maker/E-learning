<?php

namespace Database\Seeders;

use App\Models\Certificate;
use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Certificate::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $students = User::where('role','student')->pluck('id')->toArray();
        $courses = Course::pluck('id')->toArray();

        $CertificateSeeder = [
            ["user_id"=>$students[0],"course_id"=>$courses[0],"certificate_code"=>"CERT-1001","issued_at"=>now()],
            ["user_id"=>$students[1],"course_id"=>$courses[1],"certificate_code"=>"CERT-1002","issued_at"=>now()],
            ["user_id"=>$students[2],"course_id"=>$courses[2],"certificate_code"=>"CERT-1003","issued_at"=>now()],
            ["user_id"=>$students[3],"course_id"=>$courses[3],"certificate_code"=>"CERT-1004","issued_at"=>now()],
            ["user_id"=>$students[4],"course_id"=>$courses[4],"certificate_code"=>"CERT-1005","issued_at"=>now()],
            ["user_id"=>$students[5],"course_id"=>$courses[5],"certificate_code"=>"CERT-1006","issued_at"=>now()],
            ["user_id"=>$students[6],"course_id"=>$courses[6],"certificate_code"=>"CERT-1007","issued_at"=>now()],
            ["user_id"=>$students[7],"course_id"=>$courses[7],"certificate_code"=>"CERT-1008","issued_at"=>now()],
            ["user_id"=>$students[8],"course_id"=>$courses[8],"certificate_code"=>"CERT-1009","issued_at"=>now()],
            ["user_id"=>$students[9],"course_id"=>$courses[9],"certificate_code"=>"CERT-1010","issued_at"=>now()],
        ];

        Certificate::insert($CertificateSeeder);
    }
}
