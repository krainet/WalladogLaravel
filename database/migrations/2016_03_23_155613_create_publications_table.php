<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('publication_type_id')->unsigned();
            $table->integer('publication_category_id')->unsigned();
            $table->integer('publication_status_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->integer('site_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->string('short_title',255)->default('Desconocido');
            $table->string('title',255)->default('Desconocido');
            $table->string('short_text',255)->default('Desconocido');
            $table->longText('text');

            $table->dateTime('date_publish')->nullable();

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
        Schema::dropIfExists('publications');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
