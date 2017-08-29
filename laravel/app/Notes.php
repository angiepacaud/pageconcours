<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    protected $table ='notes';

    public $timestamps = false;

    public function manuscrits() {
    	$this->belongsTo(Manuscrits::class);
    } 
}

/*
class Notes extends Model
{

    protected $fillable = ['notes','id_users', 'id_manuscrits'];

	public function users() 
	{
		return $this->belongsTo('App\Users');
	}

	public function manuscrits()
	{
		return $this->belongsToMany('App\manuscrits');
	} 

} 
*/