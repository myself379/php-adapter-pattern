<?php
namespace App;

use App\eReaderInterface;

class Nook implements eReaderInterface {

    public function turnOn()
    {
        var_dump('Turning Nook on');
    }

    public function pressNextButton()
    {
        var_dump('Turning next button on Nook');
    }
}