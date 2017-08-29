<?php

use Illuminate\Database\Seeder;

class StatutTableSeeder extends Seeder {

    public function run()
	{
		DB::table('statut')->delete();

			DB::table('statut')->insert(['Traitement' => 'Lu']);
			DB::table('statut')->insert(['Traitement' => 'En cours']);
			DB::table('statut')->insert(['Traitement' => 'A lire']);
		

	}
}