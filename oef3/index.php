<?php

$x = 10;
$y = 7;

$som = 10+7;
$aftrekken = 10-7;
$vermenigvuldigen = 10*7;
$delen = 10/7;
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
    
<p><?php echo $x ?> + <?php echo $y ?> = <?php echo $som ?></p>
<p><?php echo $x ?> - <?php echo $y ?> = <?php echo $aftrekken ?></p>
<p><?php echo $x ?> * <?php echo $y ?> = <?php echo $vermenigvuldigen ?></p>
<p><?php echo $x ?> : <?php echo $y ?> = <?php echo $delen ?></p>
<p><?php echo $x ?> % <?php echo $y ?> = <?php echo $rest ?></p>

</body>
</html>