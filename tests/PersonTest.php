<?php

namespace Tests;

use App\Book;
use App\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    /** @test */
    function initiate_person_reads_books()
    {
        $person = (new Person)->read(new Book);
        // $another = new Person;
        // dd($person, $another);
        dd($person);
    }
}