<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

Class Penerbit extends Model {

	protected $table = 'penerbit';

	protected $fillable = array('name','alamat');

	public function option(){
    	$option = self::all()->pluck('name', 'id')->toArray();
    
    	return $option;
    }
}