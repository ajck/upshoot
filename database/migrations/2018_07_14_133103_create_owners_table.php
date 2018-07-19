<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 40)->nullable(); // Owner name
			$table->integer('motorbike_id')->unsigned()->nullable(); // ID of a record in the motorbikes table for a motorbike this person owns
			$table->foreign('motorbike_id')->references('id')->on('motorbikes')->onDelete('cascade'); // Define foreign key constraint
			$table->float('lat', 10, 6)->nullable(); // Latitude of owner
            $table->float('lon', 10, 6)->nullable(); // Longitude of owner
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
        Schema::dropIfExists('owners');
    }
}
