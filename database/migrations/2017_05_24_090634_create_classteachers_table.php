<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassteachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classteachers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('classes_id')->unsigned();
			$table->integer('users_id')->unsigned();
            $table->integer('sections_id')->unsigned();
			$table->integer('sessions_id')->unsigned();
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
        Schema::dropIfExists('classteachers');
    }
}
