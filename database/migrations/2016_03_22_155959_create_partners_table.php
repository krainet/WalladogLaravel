<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->integer('image_id')->unsigned();
            $table->string('name',255);
            $table->string('description',255);
            $table->string('url',255);
            $table->string('tel',50);
            $table->boolean('deleted')->default(0);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users');
            
            $table->foreign('location_id')
                ->references('id')->on('locations');

            $table->foreign('image_id')
                ->references('id')->on('images');

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
        Schema::table('partners', function (Blueprint $table) {
            $table->dropForeign('partners_id_location_foreign');
        });
        Schema::table('partners', function (Blueprint $table) {
            $table->dropForeign('partners_id_address_foreign');
        });
        Schema::table('partners', function (Blueprint $table) {
            $table->dropForeign('partners_id_image_foreign');
        });
        */

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('partners');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        

    }
}
