<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('address_prefix', 10);
            $table->string('address', 30);
            $table->smallInteger('number')->unsigned();
            $table->string('city', 20);
            $table->tinyInteger('rooms')->unsigned();
            $table->tinyInteger('bath')->unsigned();
            $table->string('furniture', 3);
            $table->float('price', 7 , 2)->unsigned();
            $table->string('image', 2048);
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
        Schema::dropIfExists('houses');
    }
}
