<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHighSchoolGradsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('high_school_grads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school');
            $table->string('municipality');
            $table->string('profile');
            $table->string('year');
            $table->string('grade');
            $table->string('male');
            $table->string('female');
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
        Schema::dropIfExists('high_school_grads');
    }
}
