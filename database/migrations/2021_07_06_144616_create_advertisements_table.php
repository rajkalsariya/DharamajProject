<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('uid');
            $table->unsignedBigInteger('cid')->nullable();
            $table->foreign('cid')->references('id')->on('categories')->onUpdate('cascade');
            $table->text('description');
            $table->string('redirecturl');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('imageurl')->nullable();
            $table->string('price')->nullable();
            $table->string('paidmode')->nullable();
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
        Schema::dropIfExists('advertisements');
    }
}
