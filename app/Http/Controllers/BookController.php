<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books', ['books' => $books]);
    }
    public function create(){
        return view('books.create');
    }
    public function store(Request $re){
        $re->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'rating' => 'required|numeric',
            'price' => 'required|numeric',
            'imgSrc' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imgSrcFile = $re->file('imgSrc');
        $originalFileName = $imgSrcFile->getClientOriginalName();
        $imgSrcFile->move(public_path('images/books'), $originalFileName);
        $book = new Book([
            'title' => $re->input('title'),
            'author' => $re->input('author'),
            'rating' => $re->input('rating'),
            'price' => $re->input('price'),
            'imgSrc' => $originalFileName,
        ]);
        $book->save();
        return redirect('/books')->with('success', 'Book added successfully!');
    }
    public function details($bookTitle, $id){
        $book = Book::find($id);
        return view('book_details', compact('book'));
    }
}
