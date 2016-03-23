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
        Schema::dropIfExists('partners');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        

    }
}
