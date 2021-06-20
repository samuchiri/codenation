<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pages')->insert([
        	'module_id'=>'1',
        	'title'=>'This is a sample page',
        	'notes'=>'The notes can be found in attachements',
        	'order'=>'Order here',
        	'quiz_id'=>'2'
        ]);
    }
}