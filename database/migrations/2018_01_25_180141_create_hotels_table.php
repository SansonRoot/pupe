<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image')->default('avatar.jpg');
            $table->string('region')->nullable();
            $table->text('cities')->nullable();
            $table->text('location')->nullable();
            $table->string('phone');
            $table->text('working_hours')->nullable();
            $table->string('token');
            $table->integer('active')->default(0);
            $table->integer('verified')->default(0);
            $table->string('email',100)->unique();
            $table->text('facilities')->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('hotels');
    }
}
