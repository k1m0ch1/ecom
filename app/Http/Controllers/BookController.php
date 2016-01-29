<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends BaseController{

  	public function getIndex(){
    	$books = Book::all();
    	return view('book_list', compact('books'));
  	}

  	public function create(){
  		$books = new Book;
  		$authorOption = new Author;
  		$authorOption = $authorOption->option();

  		return view('book/_form', compact('books', 'authorOption'));
  	}

  	public function edit($id){
  		$books = Book::findorFail($id);
  		$authorOption = new Author;
  		$authorOption = $authorOption->option();

  		return view('book/_form', compact('books', 'authorOption'));
  	}

    public function detail($id){
      $book = Book::findorFail($id);

      return view('book/detail', compact('book'));
    }

  	public function store(Request $req){
  		$books = new Book;
  		$books->title = $req->input('title');
  		$books->author_id = $req->input('author_id');
  		$books->isbn = $req->input('isbn');
  		$books->price = $req->input('price');

  		if (!$req->hasFile('cover')){
                $books->cover = '';
        }else{
                // upload file
                $destination = Book::UPLOAD_PATH;
                $file = $req->file('cover');
                $fileName = $req->file('cover')->getClientOriginalName();

                //$request->file('logo')->move($destination, $fileName);

                $uploadFile = \Image::make($req->file('cover'))->fit(130,130)->save($destination . '/' . $fileName);

                $books->cover = $fileName;
        }
  		if($books->save()) return redirect('/backend/book');
  	}

  	public function update(Request $req, $id){
  		$books = Book::findorfail($id);
  		$books->title = $req->input('title');
  		$books->author_id = $req->input('author_id');
  		$books->isbn = $req->input('isbn');
  		$books->price = $req->input('price');

  		if (!$req->hasFile('cover')){
                $books->cover = '';
        }else{
                // upload file
                $destination = Book::UPLOAD_PATH;
                $file = $req->file('cover');
                $fileName = $req->file('cover')->getClientOriginalName();

                //$request->file('logo')->move($destination, $fileName);

                $uploadFile = \Image::make($req->file('cover'))->fit(130,130)->save($destination . '/' . $fileName);

                $books->cover = $fileName;
        }
  		if($books->save()) return redirect('/backend/book');
  	}

  	public function destroy($id){
  		$books = Book::findorfail($id);
  		$books->delete();
  		return redirect('/backend/book');
  	}

  	public function dashboard(){
  		$book = Book::all();
  		return view('book/index', compact('book'));
  	}
}