<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Names extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('names', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('pronunciation')->nullable;
          $table->enum('gender', array('unisex','girl','boy'));
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
      Schema::drop('names');
    }
}
