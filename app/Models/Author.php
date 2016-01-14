<?php

namespace App\Models;

Class Author extends Eloquent {

	protected $table = 'authors';

	protected $fillable = array('name','surname');

}