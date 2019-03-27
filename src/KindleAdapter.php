<?php
namespace App;

use App\BookInterface;

class KindleAdapter implements BookInterface
{
    protected $kindle;


    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open()
    {
        return $this->kindle->turnOn();
    }

    public function turnPage()
    {
        return $this->kindle->pressNextButton();
    }
}
