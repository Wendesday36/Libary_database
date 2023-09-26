<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index(){
        return Book:: all();
    }
    public function show($id){
        return Book:: find($id);
    }
    public function destroy($id){
        return Book:: find($id)->delete();
        return redirect('/book/list');
    }
    public function update(Request $request,$id){
        $book =  Book:: find($id);
        $book ->author = $request->author;
        $book ->title = $request->title;
        $book ->pieces = $request->pieces;
        $book->save();
        return redirect('/book/list');
    }
    public function store(Request $request){
        $book = new Book();
        $book ->author = $request->author;
        $book ->title = $request->title;
        $book ->pieces = $request->pieces;
        $book->save();
        return redirect('/book/list');
    }
    public function newView(){
        $book= Book:: all();
        return view('book.new',['book'=>$book]);
    }
    public function editView($id){
        $book = Book::find($id);
        return view('book.edit', ['book'=>$book]);
    }

    public function listView(){
        $books = Book::all();
        return view('book.list',['books'=>$books]);
    }
}
