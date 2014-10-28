<?php

require_once __DIR__ . '/SugarTrait.php';

class UberCoffeeMachine extends CoffeeMachine
{
    use SugarTrait;

    protected function  doMagic()
    {
        return $this->addSugar() . ' and ' . parent::doMagic();
    }
}
