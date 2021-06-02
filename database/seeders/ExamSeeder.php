<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('exams')->insert([
        	'quiz_id'=>'1',
        	'student'=>'student A',
        	'marks'=>'60',
        	'grade'=>'B',
        	'out_of'=>'100',
        	'marked_by'=>'Lecturer B'
        ]);
    }
}