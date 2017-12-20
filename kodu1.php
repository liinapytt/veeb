<?php
/**
1. Koostada funktsioon nimega arvuSumma, mis võtab parameetrina suvalise numbri ja  arvutab numbri arvude summa - juhul, kui on argumendina funktsioonile antud number 123, siis programm peab leidma 1+2+3 summa, ehk 6. Lahendamiseks ei tohi kasutada sõnetöötluse võimalused.
 */

/*Ilma funktsioonita variant*/
$sum = 0;
$jaak= 0;
$num= rand(0,19999);
echo 'Võtame suvalise numbri: ' . $num . '<br/>';

for ($i = 0; $i <= 5; $i++) {
    $jaak = $num % 10;
    $sum = $sum + $jaak;
    $num = $num / 10;
}

echo "Numbri arvude summa on: $sum".'<br />';;

/* Funktsiooniga arvuSumma*/


function arvuSumma($number){
    $summa = 0;
    while($number != 0){
        $arv = $number % 10;
        $summa = $summa + $arv;
        $number = $number / 10;
        settype($number, 'integer');
    }
    return $summa;
}
$number = 1666;
echo 'Numbri '.$number.' arvude summa on '.arvuSumma($number).'<br />';
