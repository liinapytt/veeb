<?php
/**
 * Created by PhpStorm.
 * User: liinareb
 * Date: 20.12.2017
 * Time: 21:38
 */
/* 2. Koostada funktsioon nimega otsiNumber, mis võtab parameetrina suvalise arvu ja kindlaks määratud arvu ja arvutab mitu korda määratud arv esineb suvalises numbris, näiteks arv 5 esineb numbris 442158755745 neli korda.  Lahendamiseks ei tohi kasutada sõnetöötluse võimalused*/

function otsiNumber($suvaArv, $kindelArv){
    echo 'Arv '.$kindelArv.' esineb arvus '.$suvaArv;
    $arvKordi = 0;
    while ($suvaArv != 0){
        $arv = $suvaArv % 10;
        if($arv == $kindelArv){
            $arvKordi++;
        }
        $suvaArv = $suvaArv / 10;
        settype($suvaArv,'integer');
    }
    echo '  '.$arvKordi.'  korda<br />';

}
otsiNumber(679234732, 3);