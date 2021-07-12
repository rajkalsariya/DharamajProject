<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatrimoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matrimonies', function (Blueprint $table) {
            $table->id();
            $table->integer('uid');
            $table->string('name');
            $table->string('photourl');
            $table->string('bdt');
            $table->string('biourl');
            $table->string('sex');
            $table->string('district');
            $table->string('state');
            $table->string('maritalstatus');
            $table->text('occupation');
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
        Schema::dropIfExists('matrimonies');
    }
}
