<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Book;

use Auth;
use Validator;

class CartController extends BaseController {

  public function postAddToCart(Request $req)
  {
    $rules=array(

      'amount'=>'required|numeric',
      'book'=>'required|numeric|exists:books,id'
    );

    $validator = Validator::make($req->all(), $rules);

      if ($validator->fails())
      {
          return redirect()->route('index')->with('error','The book could not added to your cart!');
      }

      $member_id = Auth::user()->id;
      $book_id = $req->input('book');
      $amount = $req->input('amount');

      $book = Book::find($book_id);
      $total = $amount*$book->price;

       $count = Cart::where('book_id','=',$book_id)->where('member_id','=',$member_id)->count();

       if($count){

         return redirect()->route('index')->with('error','The book already in your cart.');
       }

      Cart::create(
        array(
        'member_id'=>$member_id,
        'book_id'=>$book_id,
        'amount'=>$amount,
        'total'=>$total
        ));

      return redirect()->route('cart');
  }


  public function getIndex(){

    $member_id = Auth::user()->id;

    $cart_books=Cart::with('Books')->where('member_id','=',$member_id)->get();

    $cart_total=Cart::with('Books')->where('member_id','=',$member_id)->sum('total');

    if(!$cart_books){

      return redirect()->route('index')->with('error','Your cart is empty');
    }
    
    return view('cart', compact('cart_books', 'cart_total'));
  }

  public function getDelete($id){

    $cart = Cart::find($id)->delete();

    return redirect()->route('cart');
  }

}