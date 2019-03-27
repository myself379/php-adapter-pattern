<?php
namespace App;

use App\BookInterface;

class Person
{
    public function read(BookInterface $book)
    {
        $book->open();
        $book->turnpage();
    }
}
