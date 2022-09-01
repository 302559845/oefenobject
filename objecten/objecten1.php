<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "classes/car.php";
 $car1 = new car( "Tesla model 3", 51.990, 225);
 $car2 = new car( "Audi RS 5 coupe", 140.480, 218);
 $car3 = new car( "RANGE ROVER HSE",  126.817, 206);

 echo $car1->getName(). " is " . $car1->getPrice() ." euro en zijn top snelheid is " . $car1->getKm() . "<br>";
 echo $car2->getName(). " is " . $car2->getPrice() ." euro en zijn top snelheid is " . $car2->getKm() . "<br>" ;
 echo $car3->getName(). " is " . $car3->getPrice() ." euro en zijn top snelheid is " . $car3->getKm();
?>
</body>
</html>
