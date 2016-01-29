<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

Class Inventory extends Model {

	protected $table = 'inventory';

	protected $fillable = array('title','quantity');
}