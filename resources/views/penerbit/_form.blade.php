@extends('backend_layout')

@section('content')

<div class="container" style="width:60%;  outline: 1px solid orange;">

<h1>Menambah Penerbit</h1>

{!! Form::open(['method'=>'post', 'class'=>'form-horizontal']) !!}
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="title" class="control-label col-xs-2">Name </label>
        <div class="col-xs-5">
            {!! Form::text('name', $penerbit->name, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="alamat" class="control-label col-xs-2">Alamat</label>
        <div class="col-xs-5">
            {!! Form::textarea('alamat', $penerbit->alamat, ['class'=>'form-control', 'placeholder'=>'Alamat']) !!}
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