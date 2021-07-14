<?php
return [
    '^$' => [
        'controller' => 'main',
        "action" => "main"
    ],
    '^main$' => [
        'controller' => 'main',
        "action" => "main"
    ],
    '^restaurants$' => [
        'controller' => 'restaurant',
        "action" => "list"
    ],
    '^restaurants/meat_fish$' => [
        'controller' => 'restaurant',
        "action" => "meatFish"
    ],
    '^restaurants/seafood$' => [
        'controller' => 'restaurant',
        "action" => "seafood"
    ],
    '^restaurants/food_drink$' => [
        'controller' => 'restaurant',
        "action" => "foodDrink"
    ],
];