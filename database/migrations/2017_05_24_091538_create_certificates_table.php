<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->increments('id');
		    $table->integer('cttype_id')->unsigned();
			$table->integer('student_infos_id')->unsigned();
		    $table->integer('student_roll');
			$table->integer('classes_id')->unsigned();
			$table->integer('sections_id')->unsigned();
			$table->integer('sessions_id')->unsigned();
			$table->text('app_details');
			$table->text('c_info');
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
        Schema::dropIfExists('certificates');
    }
}
