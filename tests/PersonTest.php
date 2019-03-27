<?php

namespace Tests;

use App\Book;
use App\Kindle;
use App\Nook;
use App\Person;
use App\eReaderAdapter;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{

    /** @test */
    public function initiate_person_reads_books()
    {
        $person = (new Person)->read(new Book);

        dd($person);
    }

    /** @test */
    public function initiate_person_reads_kindle()
    {
        $person = (new Person)->read(( new eReaderAdapter(new Kindle)));

        dd($person);
    }

    /** @test */
    function initiate_person_reads_nook()
    {
        $person = (new Person)->read((new eReaderAdapter(new Nook)));

        dd($person);
    }
}
