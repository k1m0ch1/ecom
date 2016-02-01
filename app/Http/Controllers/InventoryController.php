<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Book;

class InventoryController extends BaseController{

    public function getIndex(){
      $inventory = Inventory::orderBy('id', 'desc')->get();
      return view('inventory/index', compact('inventory'));
    }

    public function create(){
      $inventory = new Inventory;
      $mode = "Menambah";
      $bookOption = new Book;
      $bookOption = $bookOption->option();

      return view('inventory/_form', compact('inventory', 'mode', 'bookOption'));
    }

    public function edit($id){
      $mode = "Merubah";
      $bookOption = new Book;
      $bookOption = $bookOption->option();
      $inventory = Inventory::findorFail($id);
      return view('inventory/_form', compact('inventory', 'mode', 'bookOption'));
    }

    public function store(Request $req){
      $inventory = new Inventory;
      $inventory->book_id = $req->input('book_id');
      $inventory->stock = $req->input('quota');
      $inventory->quota = $req->input('quota');

      if($inventory->save()) return redirect('/backend/inventory');
    }

    public function update(Request $req, $id){
      $inventory = Inventory::findorfail($id);
      $inventory->book_id = $req->input('book_id');
      $inventory->stock = $req->input('stock');
      $inventory->quota = $req->input('quota');

      if($inventory->save()) return redirect('/backend/inventory');
    }

    public function destroy($id){
      $inventory = Inventory::findorfail($id);
      $inventory->delete();
      return redirect('/backend/inventory');
    }
}