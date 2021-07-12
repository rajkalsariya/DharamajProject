<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobposts', function (Blueprint $table) {
            $table->id();
            $table->integer('uid');
            $table->string('title');
            $table->text('description');
            $table->string('contactno');
            $table->string('emailid');
            $table->string('city');
            $table->string('country');
            $table->string('photo');
            $table->string('jobtype');
            $table->text('jobdetails');
            $table->string('jpdt');
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
        Schema::dropIfExists('jobposts');
    }
}
