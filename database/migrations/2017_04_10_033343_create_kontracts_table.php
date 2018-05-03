<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('seller_name');
            $table->string('buyer_name');            
            $table->string('seller_ssn');
            $table->string('buyer_ssn');
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
        Schema::dropIfExists('kontracts');
    }
}
