<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Book extends Model {

	const UPLOAD_PATH = 'asset/img/';

	protected $table = 'books';

	protected $fillable = array('title','isbn','cover','price','author_id', 'penerbit_id', 'sinopsis');

	public function Author(){
		return $this->belongsTo('App\Models\Author');
	}

	public function Penerbit(){
		return $this->belongsTo('App\Models\Penerbit');
	}

	public function Inventory(){
		return $this->hasOne('App\Models\Inventory');
	}

	public function option(){
    	$option = self::all()->pluck('title', 'id')->toArray();
    
    	return $option;
    }
}