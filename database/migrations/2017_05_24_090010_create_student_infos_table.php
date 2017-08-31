<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_infos', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('order')->nullable();
			$table->string('about')->nullable();
			$table->string('nationality')->nullable();
			$table->string('religion')->nullable();
		    $table->date('birth_date')->nullable();
			$table->integer('v_id')->nullable();
		    $table->integer('c_1')->nullable();
		    $table->integer('c_2')->nullable();
		    $table->string('per_add')->nullable();
			$table->string('pre_add')->nullable();
			$table->string('gur_name')->nullable();
			$table->integer('gur_c1')->nullable();
            $table->integer('gur_c2')->nullable();
			$table->integer('gur_vid')->nullable();
            $table->integer('users_id')->unsigned();
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
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
        Schema::dropIfExists('student_infos');
    }
}
