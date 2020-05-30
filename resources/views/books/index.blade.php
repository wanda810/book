@extends('layouts.app')

@section('content')

  <div id="shelf" class="maple shelf-front-area" data-display="front" data-template="maple">
      <div class="shelf-wrapper">
        <div class="shelf-area">
@foreach($books as $book)
          <div class="book">
            {{ $book->title }}
          </div>
@endforeach
        </div>
      </div>
  </div>
  <div class="shelf-footer"></div>

@endsection
