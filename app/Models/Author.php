<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

Class Author extends Model {

	protected $table = 'authors';

	protected $fillable = array('name','surname');

	public function option(){
    	$option = self::all()->pluck('name', 'id')->toArray();
    
    	return $option;
    }

}