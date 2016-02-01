@extends('backend_layout')

@section('content')

<div class="container" style="width:60%">
  <a href="/backend/penerbit/create" class="pull-right btn btn-primary btn-large col-x-1">Tambah Penerbit Baru</a>
  <h1>Daftar Penerbit</h1>
  <table class="table">
    <tbody>
      <tr>
        <td><b>Name</b></td>
        <td><b>Alamat</b></td>
        <td width="150px"><b>Action</b></td>
      </tr>
      @foreach($penerbit as $pt)
        <tr>
          <td>{{$pt->name}}</td>
          <td>{{$pt->alamat}}</td>
          <td>
            <a href="{{URL::route('edit_penerbit',array($pt->id))}}">Edit</a> |
            <a href="{{URL::route('delete_penerbit',array($pt->id))}}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop