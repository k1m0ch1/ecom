<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

Class BookOrder extends Model {

	protected $table = 'book_order';

	protected $fillable = array('order_id','book_id','amount','price','total');

	public function Books(){
		return $this->belongsTo('App\Models\Book','book_id');
	}

	public function order(){
		return $this->belongsTo('App\Models\Order','order_id');
	}
}