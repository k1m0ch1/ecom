@extends('backend_layout')

@section('content')

<div class="container" style="width:60%">
  <a href="/" class="pull-right btn btn-primary btn-large col-x-1">Tambah Buku Baru</a>
  <h1>Daftar Order</h1>
  <table class="table">
    <tbody>
      <tr>
        <td><b>order id</b></td>
        <td><b>Member</b></td>
        <td><b>Amount</b></td>
        <td><b>Address</b></td>
        <td><b>Total</b></td>
        <td><b>Action</b></td>
      </tr>
      @foreach($order as $od)
        <tr>
          <td>{{$od->id}}</td>
          <td>{{$od->order->usernya->name}}</td>
          <td>{{$od->amount}}</td>
          <td>{{$od->order->address}}</td>
          <td>{{$od->total}}</td>
          <td>
            <a href="{{URL::route('delete_book_from_cart',array($od->id))}}">Edit</a>
            <a href="{{URL::route('delete_book_from_cart',array($od->id))}}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop