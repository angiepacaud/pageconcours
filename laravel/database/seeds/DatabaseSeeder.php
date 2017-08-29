<?php
use Illuminate\Database\Seeder; 
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeders extends Seeder {

/**
 * Run the database seeds.
 *
 * @return void
 */
   public function run()
   {
       Model::unguard();

       // $this->call('UserTableSeeder');
       $this->call('NotesTableSeeder');
       $this->call('StatutTableSeeder');
       $this->call('ManuscritsTableSeeder');
       $this->call('GenreTableSeeder');
   }

}