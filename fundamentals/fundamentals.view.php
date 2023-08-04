<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn php</title>
    <style>
        body{
            margin: 0;
            font-family: times new roman;
        }

        /*h1{*/
        /*    display: grid;*/
        /*    place-items: center;*/
        /*    height: 100vh;*/
        /*    color: royalblue;*/
        /*    font-weight: bold;*/
        /*}*/
        div{
            background-color: brown;
            font-size: medium;
            color: aliceblue;
            display: flex;
            place-content: center;

        }
        .border{
            border-top: darkgrey;
            border-bottom: darkgray;
            background-color: #141a3c;
            font-size: 18px;
        }
        .list{
            background-color: grey;
            color: white;
            /*display:grid;*/
            /*place-items: center;*/

        }
    </style>
</head>
<body>
<div><h1>Recommended Users</h1></div>




<?php
foreach ($getItem as $laptop):?>

    <ul>
        <ol>
            <a href="'purchaseUrl'">
                Laptop name: <?= $laptop['brand']?> <br> Quantity available: <?= $laptop['inStock']?> <br> Ram: <?= $laptop['ram']?>
            </a>
        </ol>
    </ul>

<?php endforeach;?>



</body>
</html>
