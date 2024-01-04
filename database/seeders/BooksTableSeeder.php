<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;


class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach(self::BOOKS as $book){
        Book::create($book);
      }
    }
}
