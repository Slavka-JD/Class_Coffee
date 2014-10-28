<?php

require_once __DIR__ . '/CoffeeMachine.php';
require_once __DIR__ . '/UberCoffeeMachine.php';
require_once __DIR__ . '/SugarTrait.php';

$cm = new CoffeeMachine();
$cm->make();
$ucm = new UberCoffeeMachine();

print $ucm->make();
