<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwkelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twkels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('party_1_name');
            $table->string('party_1_ssn');
            $table->string('party_2_name');            
            $table->string('party_2_ssn');
            $table->integer('amount');        
            $table->string('file_path');
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
        Schema::dropIfExists('twkels');
    }
}
