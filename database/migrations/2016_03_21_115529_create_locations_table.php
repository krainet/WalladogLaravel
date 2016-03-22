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
            $table->integer('site_id')->unsigned();
            $table->string('country',255)->default('ES');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users');

            /*
            $table->foreign('partner_id')
                ->references('id')->on('partners')
                ->onDelete('cascade');

            $table->foreign('site_id')
                ->references('id')->on('sites')
                ->onDelete('cascade');
            */


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
        /*
        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign('locations_user_id_foreign');
        });


        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign('locations_partner_id_foreign');
        });

        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign('locations_site_id_foreign');
        });
        */

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('locations');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
