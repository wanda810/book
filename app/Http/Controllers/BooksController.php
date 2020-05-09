<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Book;

class BooksController extends Controller
{
    public function add()
    {
      return view('books.create');
    }

    public function create(Request $request)
    {
      $this->validate($request, Book::$rules);

      $book = new Book;
      $form = $request->all();

      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $book->imageurl = basename($path);
      } else {
        $book->imageurl = null;
      }

      $book->user_id = Auth::id();

      unset($form['_token']);

      unset($form['image']);
      $book->fill($form);
      $book->save();

      return redirect('books/create');
    }

    public function index()
    {
      $books = Book::all();

      return view('books.index', ['books' => $books]);
    }

    public function show(Request $request)
    {
      $book = Book::find($request->id);
      return view('books.show', ['book' => $book]);
    }
}
