<?php

require_once "Seed.php";

abstract class Fruit
{
    protected $seeds = [];
    function __construct(public $color, protected $weight, protected $seedCount, $seed){
        for($i = 0; $i < $this->seedCount; $i++){
            $this->seeds[] = new Seed($seed['diameter'], $seed['weight'], $seed['color']);
        }
    }

    abstract function ripen();

    static function becomeHealthy(){
        echo "Eat me!";
    }
}