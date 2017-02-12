<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishingHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishing_houses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('website');
            $table->string('address');
            $table->string('zipcode');
            $table->string('complement');
            $table->string('neighborhood');
            $table->integer('number')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('publishing_houses');
    }
}
