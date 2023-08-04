<?php
//Practice functions and filters

$laptops = [
    [
        'brand' => 'Hp',
        'ram' => '4GB',
        'speed' => '2.56GHz',
        'processor' => 'Core i5',
        'displaySize' => '15.60 inch',
        'ssd' => '265GB',
        'inStock' => 34,
        'purchaseUrl' => 'https://buygoodlaptop.com'

    ],
    [
        'brand' => 'Lenovo',
        'ram' => '6GB',
        'speed' => '2.57GHz',
        'processor' => 'Core i7',
        'displaySize' => '15.60 inch',
        'ssd' => '355GB',
        'inStock' => 24,
        'purchaseUrl' => 'https://buygoodlaptop.com'

    ],
    [
        'brand' => 'Lenovo',
        'ram' => '6GB',
        'speed' => '2.57GHz',
        'processor' => 'Core i7',
        'displaySize' => '15.60 inch',
        'ssd' => '355GB',
        'inStock' => 15,
        'purchaseUrl' => 'https://buygoodlaptop.com'

    ],
    [
        'brand' => 'Acer',
        'ram' => '4GB',
        'speed' => '2.4GHz',
        'processor' => 'Core i3',
        'displaySize' => '10.60 inch',
        'ssd' => 'N/A',
        'inStock' => 34,
        'purchaseUrl' => 'https://buygoodlaptop.com'

    ],
    [
        'brand' => 'Dell',
        'ram' => '16GB',
        'speed' => '2.8GHz',
        'processor' => 'Core i7',
        'displaySize' => '15.60 inch',
        'ssd' => '400GB',
        'inStock' => 24,
        'purchaseUrl' => 'https://buygoodlaptop.com'

    ]
];





$getItem = array_filter($laptops, function($laptop){
    return ($laptop['inStock']  <= 34);
});



//require "index.view.php";