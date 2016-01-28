<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends BaseController{
  	public function getIndex(){
    	$books = Book::all();
    	return view('book_list', compact('books'));
  	}
}