<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('vehicle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('contactnumber');
            $table->string('email');
            $table->string('manufacture');
            $table->string('type');
            $table->integer('year');
            $table->string('colour');
            $table->string('mileage');
            $table->timestamps();
            $table->softDeletes();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vehicle');
    }
}
