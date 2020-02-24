<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtkDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atk_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('regjioni');
            $table->string('komuna');
            $table->integer('ent_activity_no');
            $table->string('aktiviteti');
            $table->string('tper_year');
            $table->string('qarkullimi_total');
            $table->string('mesatare_qarkullimit');
            $table->string('kategoria');
            $table->string('nr_kompanive');
            $table->string('nr_puntoreve_ne_kompani');
            $table->string('nr_puntoreve_total');
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
        Schema::dropIfExists('atk_data');
    }
}
