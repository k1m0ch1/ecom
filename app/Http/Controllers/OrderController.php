<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\BookOrder;
use App\Models\Cart;
use App\Models\Order;

use Auth;
use Validator;

class OrderController extends BaseController {

  public function dashboard(){
      $order = BookOrder::all();
      return view('order/index', compact('order'));
    }

  public function postOrder(Request $req){
    $rules=array(

      'address'=>'required'
    );

  $validator = Validator::make($req->all(), $rules);

      if ($validator->fails())
      {
          return redirect()->route('cart')->with('error','Address field is required!');
      }

      $member_id = Auth::user()->id;
      $address = $req->input('address');

       $cart_books = Cart::with('Books')->where('member_id','=',$member_id)->get();

       $cart_total=Cart::with('Books')->where('member_id','=',$member_id)->sum('total');

       if(!$cart_books){
         return redirect()->route('index')->with('error','Your cart is empty.');
       }

      // $order = Order::create(
      //   array(
      //   'member_id'=>$member_id,
      //   'address'=>$address,
      //   'total'=>$cart_total
      //   ));

       $order = new Order;
       $order->member_id = $member_id;
       $order->address = $address;
       $order->total = $cart_total;
       $order->save();

      foreach ($cart_books as $order_books) {

        $date = date_create();
        $order->orderItems()->attach($order_books->book_id, array(
          'amount'=>$order_books->amount,
          'price'=>$order_books->Books->price,
          'total'=>$order_books->Books->price*$order_books->amount,
          'created_at'=>date_format($date, 'Y-m-d H:i:s'),
          'updated_at'=>date_format($date, 'Y-m-d H:i:s')
          ));

      }
      
      Cart::where('member_id','=',$member_id)->delete();

      return redirect()->route('index')->with('message','Your order processed successfully.');
  }


  public function getIndex(){

    $member_id = Auth::user()->id;

    if(Auth::user()->admin){

      $orders=Order::all();

    }else{

      $orders=Order::with('orderItems')->where('member_id','=',$member_id)->get();
    }

    if(!$orders){

      return redirect()->route('index')->with('error','There is no order.');
    }
    
    return view('order', compact('orders'));
  }
}