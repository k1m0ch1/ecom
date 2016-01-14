<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

Class Author extends Model {

	protected $table = 'authors';

	protected $fillable = array('name','surname');

}