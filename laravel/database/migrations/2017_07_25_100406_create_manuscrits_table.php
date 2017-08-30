<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManuscritsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
  
        Schema::create('manuscrits', function(Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 255);
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('title', 255);
            $table->integer('id_genre')->unsigned()->nullable();
            $table->text('resume')->nullable();
            $table->text('comments')->nullable();
            $table->string('file', 255);
            $table->string('descriptionfile', 255);
            $table->integer('id_statut')->unsigned()->nullable();
        });
       
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('manuscrits', function(Blueprint $table) {
        //     $table->dropForeign('manuscrits_id_genre_foreign');
        // });

         Schema::drop('manuscrits');
    }
}
