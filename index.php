<?php

$naam = "Aurélie Cardon";

$str1 = "hello ";
$str2 = "world";

$x = 7;
$y = 10;

$som = 7+10;
$aftrekken = 7-10;
$vermenigvuldigen = 7*10;
$delen = 7/10;
$rest = 10%7;

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h1><?php echo $naam ?></h1>

<h3><?php echo $str1 ?><?php echo $str2 ?></h3>

<p><?php echo $x ?> + <?php echo $y ?> = <?php echo $som ?></p>
<p><?php echo $x ?> - <?php echo $y ?> = <?php echo $aftrekken ?></p>
<p><?php echo $x ?> * <?php echo $y ?> = <?php echo $vermenigvuldigen ?></p>
<p><?php echo $x ?> : <?php echo $y ?> = <?php echo $delen ?></p>
<p><?php echo $x ?> % <?php echo $y ?> = <?php echo $rest ?></p>

</body>
</html>