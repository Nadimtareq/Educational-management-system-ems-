<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentbatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentbatches', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('classes_id')->unsigned();
			$table->integer('sessions_id')->unsigned();
			$table->integer('sections_id')->unsigned();
            $table->integer('user_id')->unsigned();
			$table->boolean('status')->default(1);
			$table->integer('student_roll',191);
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
        Schema::dropIfExists('studentbatches');
    }
}
