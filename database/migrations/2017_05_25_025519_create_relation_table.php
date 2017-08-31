<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('classes', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('sections', function (Blueprint $table) {
            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('subjects', function (Blueprint $table) {
            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('terms', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('sessions', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('exams', function (Blueprint $table) {
            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sessions_id')->references('id')->on('sessions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sections_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('terms_id')->references('id')->on('terms')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('studentbatches', function (Blueprint $table) {
            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sessions_id')->references('id')->on('sessions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sections_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });


        Schema::table('student_infos', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('results', function (Blueprint $table) {
            $table->foreign('exams_id')->references('id')->on('exams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subjects_id')->references('id')->on('subjects')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('teacher_infos', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('classteachers', function (Blueprint $table) {
            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sessions_id')->references('id')->on('sessions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sections_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('notice_types', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });


        Schema::table('noticeboards', function (Blueprint $table) {
            $table->foreign('type_id')->references('id')->on('notice_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });


        Schema::table('contact_infos', function (Blueprint $table) {
        $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

      });

        Schema::table('page_titles', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('pages', function (Blueprint $table) {
            $table->foreign('pt_id')->references('id')->on('page_titles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('daily_accounts', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('account_types', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('leaves', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('messages', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });



        Schema::table('sliders', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('certificates', function (Blueprint $table) {
            $table->foreign('cttype_id')->references('id')->on('certificate_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('student_infos_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sections_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sessions_id')->references('id')->on('sessions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('certificate_types', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('staff', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('staff_attens', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });


        Schema::table('student_attens', function (Blueprint $table) {

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sessions_id')->references('id')->on('sessions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('sections_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->foreign('c_id')->references('id')->on('gallery_cats')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('gallery_cats', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('elibraries', function (Blueprint $table) {
            $table->foreign('classes_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });























    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relation');
    }
}
