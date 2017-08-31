<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elibraries', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
			$table->text('note');
			$table->string('f_name')->nullable();
			$table->string('f_url');
			$table->integer('classes_id')->unsigned();
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
        Schema::dropIfExists('elibraries');
    }
}
