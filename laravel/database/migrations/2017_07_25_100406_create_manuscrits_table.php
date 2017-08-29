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
        $table->integer('id_genre')->unsigned();
         // $table->foreign('id_genre')
               // ->references('id_genre')
               // ->on('genres')
               // ->onDelete('restrict')
       //->onUpdate('restrict');
        $table->text('resume');
        $table->text('comments')->nullable();
        $table->string('file', 255);
        $table->integer('id_statut')->unsigned()->nullable();
    });

//     Schema::table('manuscrits', function($table) {

//       $table->foreign('id_genre')->references('id_genre')->on('genres');

  //     }); 
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
