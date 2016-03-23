<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('pet_name',100);
            $table->integer('id_pet_race')->unsigned();
            $table->string('pet_cross_description',255);
            $table->integer('id_pet_type')->unsigned();
            $table->integer('partner_id')->unsigned();
            $table->integer('id_location')->unsigned();
            $table->boolean('hidden_location')->default(false);
            $table->string('hidden_location_city',100)->default('Sin ubicación');
            $table->boolean('sterile')->default(false);
            $table->dateTime('birthdate')->nullable();
            $table->string('pet_description',255);
            $table->tinyInteger('rating')->default(0);
            $table->integer('visits')->default(0);

            $table->boolean('deleted')->default(0);
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

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('pets');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
