@extends('layouts.app')

@section('content')

  <div class = "container">
    <div class = "row">
      <div class = "col-md-8 mx-auto">
        <h2>新規作成</h2>
        <form action="{{ action('BooksController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">著者</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="author_name" value="{{ old('author_name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">出版</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="publisher_name" value="{{ old('publisher_name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メモ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="memo" rows="20">{{ old('memo') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                         <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
          </form>
      </div>
    </div>
  </div>
@endsection
