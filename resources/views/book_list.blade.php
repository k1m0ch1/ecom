@extends('main_layout')

@section('content')

<div class="container">
  <div class="span12">
    <div class="row">
      <ul class="thumbnails">
        @foreach($books as $book)
        <li class="span4">
          <div class="thumbnail">
            <a href="/book/detail/{{$book->id}}">
            <div style="background-repeat: no-repeat; background-image: url('{{asset('/asset/img/'.$book->cover)}}'); height:300px; width:300px; background-size: cover;"></div>
            </a>
            <div class="caption">
              <h4>{{substr($book->title,0,23)}}</h4>
              <p>Penulis : <b>{{$book->author->name}} {{$book->author->surname}}</b></p>
              <p>Harga : <b>RP {{$book->price}},-</b></p>
              <p>Sisa Buku : 
                @if($book->Inventory->stock==0)
                  <b>Habis</b>
                @else
                  <b>{{$book->Inventory->stock}}</b>
                @endif
              </p>
              @if(Auth::check())
              <form action="/cart/add" name="add_to_cart" method="post" accept-charset="UTF-8">
                <input type="hidden" name="book" value="{{$book->id}}" />
                <select name="amount" style="width: 100%;">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
                {!! csrf_field() !!}
                <p align="center"><button class="btn btn-info btn-block">Add to Cart</button></p>
                <a href="/book/detail/{{$book->id}}" class="btn btn-info btn-block">Detail</a>
              </form>
              @else
                <a href="/book/detail/{{$book->id}}" class="btn btn-info btn-block">Detail</a>
              @endif            
            </div>
          </div>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

@stop