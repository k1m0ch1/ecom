<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends BaseController{

  	public function getIndex(){
    	$author = Author::orderBy('id', 'desc')->get();;
    	return view('author/index', compact('author'));
  	}

  	public function create(){
  		$author = new Author;

  		return view('author/_form', compact('author'));
  	}

  	public function edit($id){
  		$author = Author::findorFail($id);
  		return view('author/_form', compact('author'));
  	}

  	public function store(Request $req){
  		$author = new Author;
  		$author->name = $req->input('name');
  		$author->surname = $req->input('surname');

  		if($author->save()) return redirect('/backend/penulis');
  	}

  	public function update(Request $req, $id){
  		$author = Author::findorfail($id);
  		$author->name = $req->input('name');
  		$author->surname = $req->input('surname');
  		if($author->save()) return redirect('/backend/penulis');
  	}

  	public function destroy($id){
  		$author = Author::findorfail($id);
  		$author->delete();
  		return redirect('/backend/author');
  	}
}