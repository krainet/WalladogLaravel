<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_category_id')->unsigned();
            $table->integer('site_type_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('pet_type_id')->unsigned();
            $table->integer('address_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->string('name',255);
            $table->text('description');
            
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
        Schema::dropIfExists('sites');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
