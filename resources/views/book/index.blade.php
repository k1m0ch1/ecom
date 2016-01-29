@extends('backend_layout')

@section('content')

<div class="container" style="width:60%">
  <a href="/" class="pull-right btn btn-primary btn-large col-x-1">Tambah Buku Baru</a>
  <h1>Daftar Buku</h1>
  <table class="table">
    <tbody>
      <tr>
        <td><b>Title</b></td>
        <td><b>Author</b></td>
        <td><b>ISBN</b></td>
        <td><b>Price</b></td>
        <td><b>Cover</b></td>
        <td><b>Action</b></td>
      </tr>
      @foreach($book as $buku)
        <tr>
          <td>{{$buku->title}}</td>
          <td>{{$buku->Author->name}}</td>
          <td>{{$buku->isbn}}</td>
          <td>{{$buku->price}}</td>
          <td>{{$buku->cover}}</td>
          <td>
            <a href="{{URL::route('delete_book_from_cart',array($buku->id))}}">Edit</a>
            <a href="{{URL::route('delete_book_from_cart',array($buku->id))}}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop