@extends('backend_layout')

@section('content')

<div class="container" style="width:60%;  outline: 1px solid orange;">

<h1>Menambah Penulis</h1>

{!! Form::open(['method'=>'post', 'class'=>'form-horizontal']) !!}
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="title" class="control-label col-xs-2">Name </label>
        <div class="col-xs-5">
            {!! Form::text('name', $author->name, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label col-xs-2">Surname</label>
        <div class="col-xs-5">
            {!! Form::text('surname', $author->surname, ['class'=>'form-control', 'placeholder'=>'Surname']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-6">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
{!! Form::close() !!}

</div>
@stop