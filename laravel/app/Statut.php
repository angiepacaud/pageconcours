<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{
   protected $table ='statut';

    public $timestamps = false;

    public function manuscrits() {
    	$this->belongsTo(Manuscrits::class);
    } 
}
