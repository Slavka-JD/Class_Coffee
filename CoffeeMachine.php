<?php

class CoffeeMachine
{
    public $myProperty;

    protected $protectedProperty;
    private $privateProperty;

    public function  make()
    {
        return $this->doMagic();
    }

    protected function doMagic()
    {
        return 'tasty coffee';
    }
}