<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('partner_id')->unsigned()->nullable();
            $table->string('address1',255);
            $table->string('address2',255);
            $table->string('province_txt',255);
            $table->string('city_txt',255);
            $table->string('cp_txt',5);

            $table->integer('id_province')->unsigned()->nullable();
            $table->integer('id_city')->unsigned()->nullable();
            $table->integer('id_country')->unsigned()->nullable();

            $table->boolean('deleted')->default(0);
            $table->timestamps();


            

            /*
            $table->foreign('id_province')
                ->references('id')->on('provinces');
            $table->foreign('id_city')
                ->references('id')->on('cities');
            $table->foreign('id_country')
                ->references('id')->on('countries');
            */
            
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
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign('addresses_id_province_foreign');
        });
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign('addresses_id_city_foreign');
        });
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign('addresses_id_country_foreign');
        });
        */

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('addresses');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
