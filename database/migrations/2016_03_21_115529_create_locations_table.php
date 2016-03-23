<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city',255)->default('Desconocida');
            $table->integer('user_id')->unsigned();
            $table->integer('partner_id')->unsigned();
            $table->integer('pet_id')->unsigned();
            $table->integer('site_id')->unsigned();
            $table->string('country',255)->default('ES');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->timestamps();

        });
        DB::statement('ALTER TABLE locations ADD location_point POINT' );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('locations');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
