<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorbikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorbikes', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('owner_id')->unsigned()->nullable(); // ID of a record in the owners table for the owner of this motorbike
			$table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade'); // Define foreign key constraint
			$table->string('brand', 40)->nullable(); // Brand name			
			$table->string('colour', 30)->nullable(); // Colour
			$table->smallInteger('model_year')->unsigned()->nullable(); // Model year
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
        Schema::dropIfExists('motorbikes');
    }
}
