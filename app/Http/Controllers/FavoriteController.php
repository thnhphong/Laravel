<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index(){
        return 'favorites';
    }
}
