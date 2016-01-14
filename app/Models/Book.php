<?php

namespace App\Models;

Class Book extends Eloquent {

	protected $table = 'books';

	protected $fillable = array('title','isbn','cover','price','author_id');

	public function Author(){
		return $this->belongTo('Author');
	}

}