<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Models\User as ur;

use Auth;
use Validator;

class UserController extends BaseController {

  public function postLogin(){
    $email=Input::get('email');
    $password=Input::get('password');

    if (Auth::attempt(array('email' => $email, 'password' => $password))){
        return Redirect::route('index');
    }else{
      return Redirect::route('index')->with('error','Please check your password & email');
    }
  }

  public function dashboard(){
      $user = ur::all();
      return view('account/index', compact('user'));
  }

  public function getLogout(){
    Auth::logout();
    return Redirect::route('index');
  }
}