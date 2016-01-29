@extends('backend_layout')

@section('content')

<div class="container" style="width:60%">
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
            <a href="{{URL::route('confirmed',array($od->id))}}">Sudah Diterima</a>
            <a href="{{URL::route('confirmed',array($od->id))}}">Sudah Diterima</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop