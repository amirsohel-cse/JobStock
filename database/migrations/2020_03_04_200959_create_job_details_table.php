<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_details', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('company_id');
            $table->integer('applicant_id');
            $table->string('job_title');
            $table->string('job_description')->nullable();
            $table->double('salary');
            $table->string('location');
            $table->string('country');
            $table->timestamps();

//            $table->foreign('company_id')->references('id')->on('company_profiles');
//            $table->foreign('applicant_id')->references('id')->on('applicants');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_details');
    }
}
