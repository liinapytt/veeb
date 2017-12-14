<?php
/**
 * Created by PhpStorm.
 * User: liinareb
 * Date: 14.12.2017
 * Time: 13:35
 */
header('Refresh: 1');
for($rida = 1; $rida <=5; $rida++){
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++){
        $juhuarv = rand(0, 15);
        $symbol = dechex($juhuarv);
        $varv = $varv.$symbol;
    }
    echo '<font color="'.$varv.'">'.
    'Värviline tekst'.
    '</font>'.
    '<br />';
}
//
$a = 5; $b = 2;
$c = $a++;
$d = $b--;
echo 'a = '.$a.'<br />';
echo 'b = '.$b.'<br />';
echo 'c = '.$c.'<br />';
echo 'd = '.$d.'<br />';
//
$a = 5; $b = 2;
$c = ++$a;
$d = --$b;
echo 'a = '.$a.'<br />';
echo 'b = '.$b.'<br />';
echo 'c = '.$c.'<br />';
echo 'd = '.$d.'<br />';
//
$kord = 1;
while($kord <= 5){
    echo '<i>'.$kord.'</i><br />';
    if($kord == 3){
        break;
    }
    echo '<b>'.$kord.++'</b><br />';
}
//
$kord = 1;
do {
    if ($kord == 3 ){
        continue;
    }
    echo '<b>'.$kord.'</b><br />';
}while(++$kord <= 5);