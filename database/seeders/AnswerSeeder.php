<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    // Course::create(['title'=>'Learning','description'=>'Learning']);
    // ['instructions','exam_id','answer','marking','marks','question_id','is_correct'];

    {


        //
            DB::table('answers')->insert([
            'instructions'=>'Suki Spares Admin',
			'exam_id'=>'1',
			'answer'=>'trial',
			'marking'=>'trial',
			'marks'=>'70',
			'question_id'=>'4',
			'is_correct'=>'true'
		]);

    }
}
