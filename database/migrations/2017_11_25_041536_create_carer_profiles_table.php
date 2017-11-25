<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carer_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('aeYouCurrentlyCaring');
            $table->string('hobbiesAndInterests');	
            $table->string('sinceWhenAreYouCaring');
            $table->integer('howManyPeopleDoYouCareFor');	
            $table->string('whatIllnessAreFacedWith');	
            $table->boolean('privaceSetting');	
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
        Schema::dropIfExists('carer_profiles');
    }
}
