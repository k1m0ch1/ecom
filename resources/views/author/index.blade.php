@extends('backend_layout')

@section('content')

<div class="container" style="width:60%">
  <a href="/backend/penulis/create" class="pull-right btn btn-primary btn-large col-x-1">Tambah Penulis Baru</a>
  <h1>Daftar Penulis</h1>
  <table class="table">
    <tbody>
      <tr>
        <td><b>Name</b></td>
        <td><b>Surname</b></td>
        <td width="150px"><b>Action</b></td>
      </tr>
      @foreach($author as $at)
        <tr>
          <td>{{$at->name}}</td>
          <td>{{$at->surname}}</td>
          <td>
            <a href="{{URL::route('edit_authors',array($at->id))}}">Edit</a> |
            <a href="{{URL::route('delete_authors',array($at->id))}}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop