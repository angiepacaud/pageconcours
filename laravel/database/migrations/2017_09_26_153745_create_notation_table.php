<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notation', function(Blueprint $table) {
        $table->increments('id_notation')->unsigned();
        $table->text('notation');
        
        $table->integer('id_user')->unsigned();
        $table->integer('id_manuscrits')->unsigned();
        
        $table->foreign('id_user')->references('id')->on('users');
        $table->foreign('id_manuscrits')->references('id')->on('manuscrits');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notation');
    }
}
