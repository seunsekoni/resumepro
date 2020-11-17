<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_histories', function (Blueprint $table) {

            // set foreign relationship to the job_histories table
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('title_id')->references('id')->on('titles')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_histories', function (Blueprint $table) {
            $table->dropForeign('employee_id');
        });
        Schema::table('job_histories', function (Blueprint $table) {
            $table->dropForeign('title_id');
        });
        Schema::table('job_histories', function (Blueprint $table) {
            $table->dropForeign('department_id');
        });
    }
}
