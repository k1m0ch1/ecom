@extends('backend_layout')

@section('content')

<div class="container" style="width:60%">
  <a href="/backend/book/create" class="pull-right btn btn-primary btn-large col-x-1">Tambah Buku Baru</a>
  <h1>Daftar Inventory</h1>
  <table class="table">
    <tbody>
      <tr>
        <td><b>Title</b></td>
        <td><b>Author</b></td>
        <td><b>ISBN</b></td>
        <td><b>Quantity</b></td>
        <td><b>Distributor</b></td>
        <td width="150px"><b>Action</b></td>
      </tr>
      @foreach($inventory as $inv)
        <tr>
          <td>{{$inv->title}}</td>
          <td>{{$inv->Author->name}}</td>
          <td>{{$inv->isbn}}</td>
          <td>{{$inv->price}}</td>
          <td>{{$inv->cover}}</td>
          <td>
            <a href="{{URL::route('edit_book',array($inv->id))}}">Edit</a> |
            <a href="{{URL::route('delete_book',array($inv->id))}}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop