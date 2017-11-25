<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('whyDidYouJoin');
            $table->boolean('communicationPreferences');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('dob');
            $table->string('language');
            $table->string('demographic');
            $table->string('illnaess');
            $table->string('profileType');
            $table->timestamps();
           // $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
