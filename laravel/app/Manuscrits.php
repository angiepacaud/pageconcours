<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Manuscrits extends Model
{
    protected $table ='manuscrits';

    public $timestamps = false;
public function getId(){
    return $this->id;
}
    public function genre () {
    	$this->belongsTo(Genre::class);
    	
    	}
    
    public function statut () {
    	/*return $this->hasMany('App\Statut');*/
    	$this->belongsTo(Statut::class);
    	

    	}

    public function notes () {
    	/*return $this->hasMany('App\Notes');*/
    	$this->belongsTo(Notes::class);
    	

    	}



}
