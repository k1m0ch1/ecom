<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Cart extends Model {

	protected $table = 'carts';

	protected $fillable = array('member_id','book_id','amount','total');

	public function Books(){
		return $this->belongsTo('App\Models\Book','book_id');
	}

}