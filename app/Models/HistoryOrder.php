<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

Class HistoryOrder extends Model {

	protected $table = 'history_order';

	protected $fillable = array('member_id','address','total');

	public function Books(){
		return $this->belongsTo('App\Models\Book','book_id');
	}

	public function order(){
		return $this->belongsTo('App\Models\Order','order_id');
	}
}