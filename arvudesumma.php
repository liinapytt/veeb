<?php
/**
 * Created by PhpStorm.
 * User: liinareb
 * Date: 18.12.2017
 * Time: 22:16
 */
$sum = 0;
$jaak= 0;
$num= rand(0,1999);
echo 'Võtame suvalise numbri: ' . $num . '<br/>';

for ($i = 0; $i <= 5; $i++) {
    $jaak = $num % 10;
    $sum = $sum + $jaak;
    $num = $num / 10;
    }

echo "Numbri arvude summa on: $sum";