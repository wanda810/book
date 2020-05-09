@extends('layouts.app')

@section('content')

  <div class = "container">
    <div class = "row">
      <div class = "col-md-8 mx-auto">
        <h2>詳細情報</h2>

        <div class="form-group row">
            <label class="col-md-2">タイトル</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="title" value="{{ $book->title }}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">著者</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="author_name" value="{{$book->author_name }}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">出版</label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="publisher_name" value="{{ $book->publisher_name }}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2">メモ</label>
            <div class="col-md-10">
                <textarea class="form-control" name="memo" rows="20">{{ $book->memo }}</textarea>
            </div>
        </div>
        <div class="form-group row">
             <label class="col-md-2" for="image">画像</label>
            <div class="col-md-10">
              @if ($book->image_path)
                <img src="{{ asset('storage/image/' . $book->image_path) }}">
              @endif
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
