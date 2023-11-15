<?php

require_once "Apple.php";
require_once "Tangerine.php";
require_once "Lemon.php";

class Table
{
    public $fruits = [];
    function __construct(public $height, public $area){
        $fruitCount = rand(0, 20);

        $appleColors = [
            1 => 'Red',
            2 => 'Green',
            3 => 'Colorful'
        ];

        $seeds = [
            1 => [
                'diameter' => 8,
                'weight' => 0.7,
                'color' => 'brown'
            ],
            2 => [
                'diameter' => 6,
                'weight' => 0.5,
                'color' => 'white'
            ]
        ];

        if($fruitCount !== 0){
            for($i = 0; $i < $fruitCount; $i++){
                $fruits = [
                    1 => new Apple($appleColors[rand(1,3)], 90, rand(0, 20), $seeds[1]),
                    2 => new Tangerine('Orange', 88, rand(0, 20), $seeds[2]),
                    3 => new Lemon('Yellow', 58, rand(0, 20), $seeds[2])
                ];

                $rand = rand(1,3);
                $this->fruits[] = $fruits[$rand];
                $this->fruits[$i]->ripen();
            }
        }
    }
}