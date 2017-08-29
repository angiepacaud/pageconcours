<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function(Blueprint $table) {
        $table->increments('id_notes')->unsigned();
        $table->text('notes');

        $table->integer('id_user')->unsigned();
        $table->integer('id_manuscrits')->unsigned();
        
        $table->foreign('id_user')->references('id')->on('users');
                        // ->onDelete('restrict')
                        // ->onUpdate('restrict');


            $table->foreign('id_manuscrits')->references('id')->on('manuscrits');
                      //  ->onDelete('restrict')
                      //  ->onUpdate('restrict');

        });

    //    Schema::table('manuscrits', function($table) {

    //   $table->foreign('id_notes')->references('id_notes')->on('notes');

      // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manuscrits', function(Blueprint $table) {
            //$table->dropForeign('manuscrits_id_notes_foreign');

        $table->dropForeign('notes_id_user_foreign');
        $table->dropForeign('notes_id_manuscrits_foreign');
        
        });

        Schema::drop('notes');
    }
    
}
