<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_infos', function (Blueprint $table) {
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
			$table->text('salary_info')->nullable();
			$table->text('salary_note')->nullable();
            $table->string('desination')->nullable();
			$table->string('eud_level')->nullable();
			$table->string('fs_1')->nullable();
			$table->string('fs_2')->nullable();
			$table->string('fs_3')->nullable();
            $table->date('join_date')->nullable();
            $table->date('ending_date')->nullable();
            $table->integer('users_id')->unsigned();
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
        Schema::dropIfExists('teacher_infos');
    }
}
