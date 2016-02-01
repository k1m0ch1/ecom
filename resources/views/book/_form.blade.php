@extends('backend_layout')

@section('content')

<div class="container" style="width:60%;  outline: 1px solid orange;">

<h1>Daftar Buku</h1>

{!! Form::open(['method'=>'post', 'class'=>'form-horizontal', 'files'=>true]) !!}
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="title" class="control-label col-xs-2">Title </label>
        <div class="col-xs-5">
            {!! Form::text('title', $books->title, ['class'=>'form-control', 'placeholder'=>'Title Name']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label col-xs-2">Author</label>
        <div class="col-xs-5">
            {!! Form::select('author_id', $authorOption, $books->author_id, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label col-xs-2">Author</label>
        <div class="col-xs-5">
            {!! Form::select('penerbit_id', $penerbitOption, $books->penerbit_id, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="mode" class="control-label col-xs-2">ISBN</label>
        <div class="col-xs-5">
            {!! Form::text('isbn', $books->isbn, ['class'=>'form-control', 'placeholder'=>'ISBN']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="Kategori" class="control-label col-xs-2">Harga Rp</label>
        <div class="col-xs-5">
            {!! Form::text('price', $books->price, ['class'=>'form-control', 'placeholder'=>'Rupiah']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="Kategori" class="control-label col-xs-2">Cover</label>
        <div class="col-xs-5">
            @if($books->cover)
            <p><img src="/asset/img/{{ $books->cover }}" width="100" class="img-responsive"></p>
            @endif
            {!! Form::file('cover', ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="sinopsis" class="control-label col-xs-2">Sinopsis</label>
        <div class="col-xs-6">
            <div class="summernote">
                {!! Form::textarea('sinopsis', $books->sinopsis, ['class'=>'form-control', 'row'=>'5', 'placeholder'=>'Sinopsis']) !!}
            </div>
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