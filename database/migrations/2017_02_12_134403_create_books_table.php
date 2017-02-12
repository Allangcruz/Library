<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('publishing_house_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->string('title');
            $table->string('subtitle');
            $table->text('observation');
            $table->smallInteger('nu_exemplary');
            $table->smallInteger('nu_edition');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE books ADD year YEAR(4);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
