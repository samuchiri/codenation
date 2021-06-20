<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->integer('balance');
            $table->integer('due');
            $table->string('status');
            $table->integer('student_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
// api.php helps you to test the system through POSTMAN if you don't have an interface yet. Eg, you may want to delete a user but you don't have a "DELETE" button on the interface. So, first you use POSTMAN (https://web.postman.co/)