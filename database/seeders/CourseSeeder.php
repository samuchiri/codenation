<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // //  $table->increments('id');
        //     $table->string('name');
        //     $table->string('description',1000);
        //     $table->string('image')->nullable();
        //     $table->timestamps();
        DB::table('courses')->insert([
            'name'=>'Code Nation Admin',
			'description'=>'Courses offered'
		]);
    }
}
