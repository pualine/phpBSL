
<?php
//Practice functions and filters

//$laptops = [
//    [
//        'brand' => 'Hp',
//        'ram' => '4GB',
//        'speed' => '2.56GHz',
//        'processor' => 'Core i5',
//        'displaySize' => '15.60 inch',
//        'ssd' => '265GB',
//        'purchaseUrl' => 'https://buygoodlaptop.com'
//
//    ],
//    [
//        'brand' => 'Lenovo',
//        'ram' => '6GB',
//        'speed' => '2.57GHz',
//        'processor' => 'Core i7',
//        'displaySize' => '15.60 inch',
//        'ssd' => '355GB',
//        'purchaseUrl' => 'https://buygoodlaptop.com'
//
//    ],
//    [
//        'brand' => 'Lenovo',
//        'ram' => '6GB',
//        'speed' => '2.57GHz',
//        'processor' => 'Core i7',
//        'displaySize' => '15.60 inch',
//        'ssd' => '355GB',
//        'purchaseUrl' => 'https://buygoodlaptop.com'
//
//    ],
//    [
//        'brand' => 'Acer',
//        'ram' => '4GB',
//        'speed' => '2.4GHz',
//        'processor' => 'Core i3',
//        'displaySize' => '10.60 inch',
//        'ssd' => 'N/A',
//        'purchaseUrl' => 'https://buygoodlaptop.com'
//
//    ],
//    [
//        'brand' => 'Dell',
//        'ram' => '16GB',
//        'speed' => '2.8GHz',
//        'processor' => 'Core i7',
//        'displaySize' => '15.60 inch',
//        'ssd' => '400GB',
//        'purchaseUrl' => 'https://buygoodlaptop.com'
//
//    ]
//];



//Filter laptop brand
//function filterByBrand($laptops, $value){
//    $filteredBrand = [];
//
//    foreach ($laptops as $laptop){
//        if ($laptop['ram'] === $value){
//            $filteredBrand[] = $laptop;
//        }
//    }
//    return $filteredBrand;
//
//}
//
//generic function(template)
//function filter($items, $fn):array{
//    $filteredItem = [];
//
//    foreach($items as $item){
//        if ($fn($item)){
//            $filteredItem[] = $item;
//        }
//    }
//    return $filteredItem;
//}
//?>
<!--loop over the array "laptop" and display laptop brand and details-->
<!--<ul>-->
<!--    --><?php //foreach (filterByBrand($laptops, '16GB') as $laptop):?>
<!---->
<!--        <li>-->
<!--            <a href="--><?php //= $laptop['purchaseUrl']?><!--">-->
<!--                Ram: --><?php //= $laptop['ram']?><!-- with display size: ( --><?php //= $laptop['processor'] ?><!--) --><?php //=$laptop['ssd']?>
<!--            </a>-->
<!--        </li>-->
<!---->
<!--    --><?php //endforeach; ?>
<!--</ul>-->
<!--Revise Associative Array - key value pairs------------------------------->
<?php
//$users = [
//    [
//        'name' => 'Whizzy Ellah',
//        'age' => 31,
//        'location' => 'London West Ellah Street 475ts',
//        'occupation' => 'Software Engineer',
//        'blogUrl' => 'https://ellahblog.com'
//    ],
//    [
//        'name' => 'Wensa Akasa',
//        'age' => 35,
//        'location' => 'Kenya East',
//        'occupation' => 'Data Analyst',
//        'blogUrl' => 'https://wensablog.com'
//    ],
//    [
//        'name' => 'Babra Sensi',
//        'age' => 29,
//        'location' => 'West Vergina El street',
//        'occupation' => 'UX Researcher',
//        'blogUrl' => 'https://sensiblog.com'
//    ],
//    [
//        'name' => 'Quis Minkle',
//        'age' => 30,
//        'location' => 'Canada Toronto',
//        'occupation' => 'UI/UX Designer',
//        'blogUrl' => 'https://quis.com'
//    ],
//    [
//        'name' => 'Nelly Aug',
//        'age' => 34,
//        'location' => 'UK',
//        'occupation' => 'Cybersecurity Analyst',
//        'blogUrl' => 'https://nellyblog.com'
//    ]
//];
//
//?>

    <!--Display a list of names in the array-->
<?php //foreach ($users as $user):?>
<!--    --><?php //= "<div class='border'><li class=''> Author: {$user['name']} </li></div>"?>
<!--    --><?php //= "<li class='list'>Age: {$user['age']}</li>"?>
<!---->
<!--    <li class='list'>Blog: <a href="--><?php //= $user['blogUrl'] ?><!--">find out more</a></li>       -->
<!--    --><?php //= "<li class='list'>Occupation: {$user['occupation']}</li>"?>
<!--    -->
<?php //endforeach;?>
<!---->
<?php //= $users[3]['name'] ?>


<!--Yet another way to create function-->

<?php
//the normal way of creating a function is known as a 'named function'
//function sortItem($items, $value):array{
//$filteredItem = [];
//
//foreach($items as $item){
//if ($item['brand'] === $value){
//$filteredItem[] = $item;
//}
//}
//return $filteredItem;
//}
//
//
//?>


<?php
////the variable $items is an array
//foreach (sortItem($items, 'Dell') as $item):?>
<!---->
<!--    <ul>-->
<!--        <ol>-->
<!--            <a href="'purchaseUrl'">-->
<!--                Your Laptop Brand is --><?php //= $item['brand']?><!-- <br> Display size: --><?php //= $item['displaySize']?><!-- <br> Speed: --><?php //= $item['speed']?>
<!--            </a>-->
<!--        </ol>-->
<!--    </ul>-->
<!---->
<!---->
<?php //endforeach;?>
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
