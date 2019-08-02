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
            $table->increments('id');
            $table->string('name_of_business')->nullable();
            $table->string('status')->nullable();
            $table->string('fiscal_number')->nullable();
            $table->string('business_type')->nullable();
            $table->string('capital')->nullable();
            $table->string('number_of_employees')->nullable();
            $table->string('owners')->nullable();
            $table->string('owners_gender')->nullable();
            $table->string('authorized_persons')->nullable();
            $table->string('date_of_registration')->nullable();
            $table->string('link_of_arbk')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('municipality')->nullable();
            $table->longText('activities')->nullable();
//            $table->timestamps();
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
