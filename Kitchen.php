<?php

class Kitchen
{
    public $water;
    private $cm;

    public function __construct(CoffeeMachine $cm)
    {
        $this->cm = $cm;
        $this->juice = "glass of water";
    }

    public function get($prop)
    {
        print 'There is not' . $prop . 'prop';
    }

    public function set($prop, $value)
    {
        print 'There is not' . $prop . 'prop';
        print '\n';
        $this->juice = $value;
    }

    public function getCoffee()
    {
        return $this->cm->make();
    }
}

$k = new Kitchen($ucm);
print $k->water;