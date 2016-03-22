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
            $table->integer('id_partner')->unsigned();
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


            
            $table->foreign('id_pet_race')
                ->references('id')->on('pet_races');

            $table->foreign('id_pet_type')
                ->references('id')->on('pet_types');

            $table->foreign('id_partner')
                ->references('id')->on('partners');
            

            $table->foreign('id_location')
                ->references('id')->on('locations');
            



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        /*
        Schema::table('pets', function (Blueprint $table) {
            $table->dropForeign('pets_id_pet_race_foreign');
        });
        Schema::table('pets', function (Blueprint $table) {
            $table->dropForeign('pets_id_pet_type_foreign');
        });
        Schema::table('pets', function (Blueprint $table) {
            $table->dropForeign('pets_id_partner_foreign');
        });

        Schema::table('pets', function (Blueprint $table) {
            $table->dropForeign('pets_id_location_foreign');
        });
        */

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('pets');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
