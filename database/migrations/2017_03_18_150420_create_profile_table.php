<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lab_value');
            $table->string('diagnoses');
            $table->string('treatment');
            $table->string('is_alive');
            $table->longText('note');
            $table->integer('patient_id')->unsigned();
            $table->timestamps();

            $table->foreign('patient_id')
                ->references('id')
                ->on('patient')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
