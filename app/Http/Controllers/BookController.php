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

    public function editBook($id){
        $book = Book::find($id);
        return view('book_edit', ['book'=>$book]);
    }

    public function updateBook(Request $request){
        $book = Book::find($request->id);
        
        $book->name = $request->name;
        $book->author = $request->author;
        $book->pages = $request->pages;
        $book->price = $request->price;
        $book->published = $request->published;
        $book->rating = $request->rating;

        $book->save();

        return redirect('/book')->with('message','Book update successfully.');
    }


    public function deleteBook($id){
        $book = Book::find($id);
        $book->delete();
        return redirect('/book')->with('message','Book delete successfully.');
    }

    private function jsonGenerate(){
         // array
         $array = Array (
            "0" => Array (
                "id" => "MMZ301",
                "name" => "Michael Bruce",
                "designation" => "System Architect"
            ),
            "1" => Array (
                "id" => "MMZ385",
                "name" => "Jennifer Winters",
                "designation" => "Senior Programmer"
            ),
            "2" => Array (
                "id" => "MMZ593",
                "name" => "Donna Fox",
                "designation" => "Office Manager"
            )
        );

        // encode array to json
        $json = json_encode(array('users' => $array));

        //write json to file
        if (file_put_contents("data.json", $json))
            echo "JSON file created successfully...";
        else 
            echo "Oops! Error creating json file...";
        return true;
    }

    private function getJSON(){
        $get_data = json_decode(file_get_contents("data.json"), true);
        dd($get_data);
        return true;
    }
}
