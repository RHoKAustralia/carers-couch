<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSMEProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_m_e_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qualifications');	
            $table->string('experience');	
            $table->string('specialLicenses');	
            $table->string('insurance');	
            $table->string('competenceFocus');	
            $table->string('motivationForJoning');	
            $table->boolean('privaceSetting');	
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_m_e_profiles');
    }
}
