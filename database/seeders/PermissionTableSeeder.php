<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create(['name'=>'Admin']);
        Role::create(['name'=>'Student']);

        Permission::create(['name'=>'Create Answer']);
        Permission::create(['name'=>'View Answer']);
        Permission::create(['name'=>'Update Answer']);
        Permission::create(['name'=>'Delete Answer']);
        // Create View Update Delete must start with a capital letter and ought to match with the respective policy
        // Eg ('view Answer'); in Answer Policy must match with 'View Answer' in permission table seeder

        Permission::create(['name'=>'Create Choice']);
        Permission::create(['name'=>'View Choice']);
        Permission::create(['name'=>'Update Choice']);
        Permission::create(['name'=>'Delete Choice']);

        Permission::create(['name'=>'Create Course']);
        Permission::create(['name'=>'View Course']);
        Permission::create(['name'=>'Update Course']);
        Permission::create(['name'=>'Delete Course']);

        Permission::create(['name'=>'Create Exam']);
        Permission::create(['name'=>'View Exam']);
        Permission::create(['name'=>'Update Exam']);
        Permission::create(['name'=>'Delete Exam']);

        Permission::create(['name'=>'Create Module']);
        Permission::create(['name'=>'View Module']);
        Permission::create(['name'=>'Update Module']);
        Permission::create(['name'=>'Delete Module']);

        Permission::create(['name'=>'Create Page']);
        Permission::create(['name'=>'View Page']);
        Permission::create(['name'=>'Update Page']);
        Permission::create(['name'=>'Delete']);

        Permission::create(['name'=>'Create Question']);
        Permission::create(['name'=>'View Question']);
        Permission::create(['name'=>'Update Question']);
        Permission::create(['name'=>'Delete Question']);

        Permission::create(['name'=>'Create Quiz']);
        Permission::create(['name'=>'View Quiz']);
        Permission::create(['name'=>'Update Quiz']);
        Permission::create(['name'=>'Delete Quiz']);

        Permission::create(['name'=>'Create Resource']);
        Permission::create(['name'=>'View Resource']);
        Permission::create(['name'=>'Update Resource']);
        Permission::create(['name'=>'Delete Resource']);

        Permission::create(['name'=>'Create StudentCourse']);
        Permission::create(['name'=>'View StudentCourse']);
        Permission::create(['name'=>'Update StudentCourse']);
        Permission::create(['name'=>'Delete StudentCourse']);

        Permission::create(['name'=>'Create Student']);
        Permission::create(['name'=>'View Student']);
        Permission::create(['name'=>'Update Student']);
        Permission::create(['name'=>'Delete Student']);
    }
}
