<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BusinessesMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses_map', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('municipality');
            $table->integer('publishing_of_computer_games');
            $table->integer('computer_programming_activities');
            $table->integer('computer_consultancy_activities');
            $table->integer('computer_facilities_management_activities');
            $table->integer('information_technology_and_computer_service');
            $table->integer('wired_telecommunications_activities');
            $table->integer('wireless_telecommunication_activities');
            $table->integer('satellite_telecommunication_activities');
            $table->integer('other_telecommunication_activities');
            $table->integer('other_software_publishing');
            $table->integer('data_processing_hosting_and_related_activities');
            $table->integer('year');
            $table->integer('total');
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
        Schema::dropIfExists('businesses_map');
    }
}
