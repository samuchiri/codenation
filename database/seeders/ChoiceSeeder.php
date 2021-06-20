<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         // $table->increments('id');
         //    $table->integer('question_id');
         //    $table->string('choice');
         //    $table->timestamps();
                DB::table('choices')->insert([
            'question_id'=>'1',
			'choice'=>'+254727787878',
			]);
    }
}
