<?php

require 'functions.php';

/*require 'router.php';*/

class Person {
    public $name;
    public $age;
    function breathe(){
        echo $this->name. ' is breathing!';
    }
}
$person = new Person();

$person->name = "John";

$person->age = 25;

$person->breathe();



