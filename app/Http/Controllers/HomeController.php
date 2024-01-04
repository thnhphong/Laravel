<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('client');
    }
    public function books(){
        $books = Book::all();
        return view('books', ['books' => $books]);
    }
    public function shop(){
        return view('shop');
    }
    public function wishlist(){
        return view('wishlist');
    }
    public function favorites(){
        return view('favorites');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}

