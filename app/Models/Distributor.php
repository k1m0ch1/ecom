<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

Class Distributor extends Model {

	protected $table = 'distributor';

	protected $fillable = array('name','surname');
}