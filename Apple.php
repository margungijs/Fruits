<?php

require_once "Fruit.php";

class Apple extends Fruit
{
    function ripen()
    {
        echo "I'm ready to kill Snow White";
    }
}