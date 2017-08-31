<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_accounts', function (Blueprint $table) {
            $table->increments('id');
			$table->date('date');
			$table->boolean('acc_type');
			$table->integer('user_id')->nullable();
			$table->integer('c_id')->nullable();
            $table->string('c_name')->nullable();
		    $table->boolean('ix_status');
			$table->float('amount');
			$table->text('note')->nullable();
			$table->string('f_url')->nullable();
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
        Schema::dropIfExists('daily_accounts');
    }
}
