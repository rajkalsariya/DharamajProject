<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('logo');
            $table->string('established');
            $table->string('contact1');
            $table->string('contact2');
            $table->string('email');
            $table->unsignedBigInteger('cid')->nullable();
            $table->foreign('cid')->references('id')->on('categories')->onUpdate('cascade');
            $table->text('description');
            $table->string('adder1');
            $table->string('adder2');
            $table->string('city');
            $table->string('pincode');
            $table->string('website');
            $table->string('photourl')->nullable();
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
        Schema::dropIfExists('services');
    }
}
