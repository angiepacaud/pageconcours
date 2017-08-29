<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function(Blueprint $table) {
        $table->increments('id_genre')->unsigned();
        $table->string('genrename', 255);
        });

        Schema::table('manuscrits', function($table) {

       $table->foreign('id_genre')->references('id_genre')->on('genres');

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
            $table->dropForeign('manuscrits_id_genre_foreign');
        });

        Schema::drop('genres');
    }
}
