<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('password')->default(str_random(9));
            $table->string('firstname',100)->nullable();
            $table->string('lastname',100)->nullable();
            $table->string('identification_number_type',10)->nullable();
            $table->string('identification_number',25)->nullable();
            $table->dateTime('birthdate')->nullable();
            $table->bigInteger('id_location')->nullable();
            $table->tinyInteger('id_type')->default(0);
            $table->integer('id_level')->default(0);
            $table->bigInteger('id_user_detail')->nullable();
            $table->integer('id_user_state')->unsigned()->default(0);
            $table->string('facebook_token',255)->nullable();
            $table->string('google_token',255)->nullable();
            $table->string('twitter_token',255)->nullable();
            $table->string('oauth2_token',255)->nullable();
            $table->boolean('deleted')->default(0);
            $table->boolean('isSuperAdmin')->default(0);
            $table->string('api_token', 60)->unique();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_user_state')
                ->references('id')->on('user_states');

            
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_id_user_state_foreign');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_delivery_address_id_foreign');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_invoice_address_id_foreign');
        });
        Schema::dropIfExists('users');
        */

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
