<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

Class Order extends Model {

	protected $table = 'orders';

	protected $fillable = array('member_id','address','total');

	public function orderItems(){
        return $this->belongsToMany('Book') ->withPivot('amount','total');
    }

}