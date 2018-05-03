<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMariagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mariages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('hus_name');
            $table->string('wife_name');
            $table->string('wife_parent_name');            
            $table->string('hus_ssn');
            $table->string('wife_ssn');
            $table->string('wife_parent_ssn');
            $table->string('witness_1_ssn');
            $table->string('witness_2_ssn');
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
        Schema::dropIfExists('mariages');
    }
}
