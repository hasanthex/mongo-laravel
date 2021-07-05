<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $book = Book::orderBy('_id', 'desc')->get();
        return view('book', ['books'=>$book]);
    }

    public function saveBook(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'author' => 'required',
            'pages' => 'required',
            'price' => 'required',
            'published' => 'required',
            'rating' => 'required',
        ]);

        $book = new Book();
        $book->name = $request->name;
        $book->author = $request->author;
        $book->pages = $request->pages;
        $book->price = $request->price;
        $book->published = $request->published;
        $book->rating = $request->rating;
        $book->save();

        return redirect('/book')->with('message','Book stored successfully.');
    }
}
