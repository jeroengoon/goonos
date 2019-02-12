<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('street');
            $table->string('housenumber');
            $table->string('city');
            $table->string('country');
            $table->string('postalcode');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::table('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->dropColumn('street');
            $table->dropColumn('housenumber');
            $table->stridropColumnng('city');
            $table->strdropColumning('country');
            $table->dropColumn('postalcode');
            $table->dropColumn('email')->unique();
            $table->dropColumn('email_verified_at')->nullable();
            $table->dropColumn('password');
        });
        
    }
}
