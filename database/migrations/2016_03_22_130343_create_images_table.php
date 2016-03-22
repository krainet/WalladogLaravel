<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->integer('id_location')->unsigned()->nullable();
            $table->integer('user_detail_id')->unsigned()->nullable();
            $table->integer('pet_id')->unsigned()->nullable();
            $table->integer('partner_id')->unsigned()->nullable();
            $table->integer('product_id')->unsigned()->nullable();
            $table->string('url_short',255)->nullable();
            $table->string('url_big',255)->nullable();
            $table->boolean('deleted')->default(0);
            $table->timestamps();

            $table->foreign('user_detail_id')
                ->references('id')->on('user_details');
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

        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign('images_user_detail_id_foreign');
        });
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign('images_id_location_foreign');
        });
        Schema::drop('images');


        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('images');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
