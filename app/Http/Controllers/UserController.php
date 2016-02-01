<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\User as ur;

use Auth;
use Validator;

class UserController extends BaseController {

  public function postLogin(Request $req){
    $email=$req->input('email');
    $password=$re->input('password');

    if (Auth::attempt(array('email' => $email, 'password' => $password))){
        return redirect('/');
    }else{
      return redirect()->route('index')->with('error','Please check your password & email');
    }
  }

  public function dashboard(){
      $user = ur::all();
      return view('account/index', compact('user'));
  }

  public function getLogout(){
    Auth::logout();
    return redirect('/');
  }

  public function destroy($id){
    $books = Book::findorfail($id);
    $books->delete();
    return redirect('/backend/account');
  }
}