<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Penerbit;

class PenerbitController extends BaseController{

  	public function getIndex(){
    	$penerbit = Penerbit::orderBy('id', 'desc')->get();;
    	return view('penerbit/index', compact('penerbit'));
  	}

  	public function create(){
  		$penerbit = new Penerbit;

  		return view('penerbit/_form', compact('penerbit'));
  	}

  	public function edit($id){
  		$penerbit = Penerbit::findorFail($id);
  		return view('penerbit/_form', compact('penerbit'));
  	}

  	public function store(Request $req){
  		$penerbit = new Penerbit;
  		$penerbit->name = $req->input('name');
  		$penerbit->alamat = $req->input('alamat');

  		if($penerbit->save()) return redirect('/backend/penerbit');
  	}

  	public function update(Request $req, $id){
  		$penerbit = Penerbit::findorfail($id);
  		$penerbit->name = $req->input('name');
  		$penerbit->alamat = $req->input('alamat');
  		if($penerbit->save()) return redirect('/backend/penerbit');
  	}

  	public function destroy($id){
  		$penerbit = Penerbit::findorfail($id);
  		$penerbit->delete();
  		return redirect('/backend/penerbit');
  	}
}