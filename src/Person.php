<?php
namespace App;

class Person
{
    public function read($book)
    {
        $book->open();
        $book->turnpage();
    }
}
