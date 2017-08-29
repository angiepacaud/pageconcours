<?php

namespace App\Repositories;

use App\Manuscrits;
use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;

class ManuscritRepository {

	private $app;
	private $model;

	public function __construct ( App $app ) {

		$this->app = $app;

	}

	public function makeModel () {

		$model = $this->app->make($this->model());
		if( ! $model instanceof Model )
			throw new \Exception("Class {$this->model()} must be an instance of Illuminate\Database\Eloquent\Model");

		$this->model = $model;

	}

	private function model() {
		return 'App\Manuscrits';
	}

	public function findGenres () {
		
	}
}