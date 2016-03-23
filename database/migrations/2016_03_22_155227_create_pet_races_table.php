<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePetRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_races', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pet_type')->unsigned();
            $table->string('name',255);
            $table->boolean('deleted')->default(0);
            $table->timestamps();

            $table->foreign('id_pet_type')
                ->references('id')->on('pet_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('pet_races');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
