@extends('backend_layout')

@section('content')

<div class="container" style="width:60%">
  <a href="/" class="pull-right btn btn-primary btn-large col-x-1">Tambah User Baru</a>
  <h1>Daftar Order</h1>
  <table class="table">
    <tbody>
      <tr>
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Action</b></td>
      </tr>
      @foreach($user as $ur)
        <tr>
          <td>{{$ur->name}}</td>
          <td>{{$ur->email}}</td>
          <td>
            <a href="{{URL::route('delete_book_from_cart',array($ur->id))}}">Edit</a>
            <a href="{{URL::route('delete_book_from_cart',array($ur->id))}}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop