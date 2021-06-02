<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      
         DB::table('students')->insert([
            'reg_no'=>'23rt',
			'user_id'=>'4'
		]);
         DB::table('students')->insert([
            'reg_no'=>'10828',
            'user_id'=>'3'
        ]);
         DB::table('students')->insert([
            'reg_no'=>'40404',
            'user_id'=>'5'
        ]);
         DB::table('students')->insert([
            'reg_no'=>'505545',
            'user_id'=>'1'
        ]);
    }



}
 