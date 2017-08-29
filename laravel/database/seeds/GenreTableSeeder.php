<?php

use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder {

    public function run()
	{
		DB::table('genres')->delete();

			DB::table('genres')->insert(['genrename' => 'Bit-Lit']);
			DB::table('genres')->insert(['genrename' => 'Fantasy']);
			DB::table('genres')->insert(['genrename' => 'Fantastique']);
			DB::table('genres')->insert(['genrename' => 'Romance']);
			DB::table('genres')->insert(['genrename' => 'Science-Fiction']);
			DB::table('genres')->insert(['genrename' => 'Terreur']);
			DB::table('genres')->insert(['genrename' => 'Thriller']);
		

	}
}