<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('term');
            $table->string('major');
            $table->string('agency');
            $table->string('agency_address');
            $table->string('agency_website');
            $table->string('supervisor');
            $table->string('supervisor_phone');
            $table->string('supervisor_email');
            $table->binary('offer_letter');
            $table->binary('job_description');
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
        Schema::drop('internships');
    }
}
