<?php
namespace App;

use App\eReaderInterface;

class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('Turning Kindle on');
    }

    public function pressNextButton()
    {
        var_dump('Turning next button on Kindle');
    }
}