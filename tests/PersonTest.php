<?php

namespace Tests;

use App\Book;
use App\Kindle;
use App\KindleAdapter;
use App\Person;
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
        $person = (new Person)->read(( new KindleAdapter(new Kindle)));

        dd($person);
    }
}
