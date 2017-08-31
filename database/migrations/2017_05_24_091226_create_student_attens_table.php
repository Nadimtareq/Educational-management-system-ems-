<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentAttensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_attens', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('ct_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->date('date');
			$table->integer('classes_id')->unsigned();
			$table->integer('sessions_id')->unsigned();
			$table->integer('sections_id')->unsigned();
			$table->boolean('atten_status');
			$table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
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
        Schema::dropIfExists('student_attens');
    }
}
