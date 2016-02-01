@extends('backend_layout')

@section('content')

<div class="container" style="width:60%">
  <a href="/backend/inventory/create" class="pull-right btn btn-primary btn-large col-x-1">Tambah Inventory Baru</a>
  <h1>Daftar Inventory</h1>
  <table class="table">
    <tbody>
      <tr>
        <td><b>Buku</b></td>
        <td><b>Stock</b></td>
        <td><b>Quota</b></td>
        <td width="150px"><b>Action</b></td>
      </tr>
      @foreach($inventory as $inv)
        <tr>
          <td>{{$inv->Book->title}}</td>
          <td>{{$inv->stock}}</td>
          <td>{{$inv->quota}}</td>
          <td>
            <a href="{{URL::route('edit_inv',array($inv->id))}}">Edit</a> |
            <a href="{{URL::route('delete_inv',array($inv->id))}}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop