<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statut', function(Blueprint $table) {
        $table->increments('id_statut')->unsigned();
        $table->string('Traitement', 255);
      /*  $table->string('Lu', 255);
        $table->string('En cours', 255);
        $table->string('A lire', 255); */
        });

        Schema::table('manuscrits', function($table) {

       $table->foreign('id_statut')->references('id_statut')->on('statut');

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('manuscrits', function(Blueprint $table) {
            $table->dropForeign('manuscrits_id_statut_foreign');
        });

        Schema::drop('statut');
    }
}
