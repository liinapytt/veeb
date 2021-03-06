<?php
/**
 * Created by PhpStorm.
 * User: liinareb
 * Date: 21.12.2017
 * Time: 14:19
 */
$arvud = array();// tühi massiiv
// lisame väärtused
$arvud[] = 5;
$arvud[] = 1;
$arvud[] = 4;
$arvud[] = 2;

// kuidas luua juba väärtusetega massiivi
$arvud1 = array(1,2,3,4,5);

//testväljastus
echo '<pre>';
print_r($arvud);
echo '<pre>';

// korralik väljastus for või foreach tsükli abil
for($i = 0; $i < count($arvud); $i++){
    echo '<b>'.$arvud[$i].'</b><br/>';
}
foreach ($arvud1 as $arv){
    echo '<i>'.$arv.'</i><br/>';
}

/* Ülesanded
/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */
function looMassiiv($elemArv){
    $massiiv = array();
    for ($kord=1; $kord<= $elemArv; $kord++){
        $juhuarv = rand(100, 999);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}
$testMassiiv = looMassiiv(5);
echo '<pre>';
print_r($testMassiiv);
echo '</pre>';
echo '<hr />';

/*
 * 2.
 * Loo funktsioon nimega valjastaMassiiv,
 * mis võtab parameetrina massiivi ja
 * väljastab tema elemendid
 * üheveerulise tabeli kujul
 * Väljundi loomisel kasutada foreach
 * tsükkel
 * */
function valjastaMassiiv($massiiv){
    echo '<table border="1">';
    foreach ($massiiv as $element){
        echo '<tr>';
            echo '<td>';
            echo $element;
            echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}

valjastaMassiiv($testMassiiv);
echo '<hr />';

/*
 * 3.
 * Loo funktsioon nimega vahetaMinMax, mis võtab
 * parameetrina täisarvude massiivi (testimises
 * võib kasutada looMassiiv funktsiooniga
 * genereeritud massiiv)
 * ja leiab kõige väiksema ja kõige suurema
 * elemendi antud massiivis ning vahetab nende asukohad.
 *
 * Kontrolli kas kohad on vahetatud kasutades
 * valjastaMassiiv funktsiooni
*/
function vahetaMinMax(&$massiiv){ /*otse parameetri muutmiseks kasutan & märki*/
    $min = min($massiiv);
    $max = max($massiiv);
    echo 'Miiinimum= '.$min.'<br/>';
    echo 'Maximum= '.$max.'<br/>';
    for ($i= 0; $i < count($massiiv); $i++){
        if($massiiv[$i] == $min){
            $massiiv[$i] = $max;
        } else if ($massiiv[$i] == $max){
            $massiiv[$i] = $min;
        }
        echo $massiiv[$i].'<br/>';
    }
}
valjastaMassiiv($testMassiiv);
vahetaMinMax($testMassiiv);


/*
 * 4.
 * Loo funktsioon nimega elementideKorrutis, mis
 * võtab parameetrina täisarvude massiivi ja leiab
 * korrutis nendest arvudest, mis on suurem kui 0
 * ja mille indeksid on paarisarvud.
 * Kontrollimiseks näiteks kasutada järgmine massiiv:
 * 1, 0, 6, 0, 0, 3, 5
 * Tulemus väljastatakse antud funktsiooni abil kujul:
 * Tulemus: 1 * 6 * 5 = 30
*/


/**
 * @param $massiivUus
 * @return int
 */
function elementideKorrutis($massiivUus){
    $korrutis = 1;
    foreach($massiivUus as $element) {
        $i = array_search($element, $massiivUus);
        if ($massiivUus[$i] > 0 && $i % 2 == 0) {
            $korrutis *= $element;
            echo "element on : ". $element . '<br>';
        }
    } return "Tulemus : ".$korrutis;
    }
$naidis = array(1,0,6,0,0,3,5);
$tulemus = elementideKorrutis($naidis);
echo '<pre>';
print_r($tulemus);
echo '</pre>';
echo '<hr />';


/*
 * 5.
 * Töötluses kasutada massiiv
 * $massiiv = array(1, 1, 1, 2, 2, 2, 2, 3).
 * Loo funktsioon mitteDubleeri, mis võtab
 * parameetrina massiivi ja ei väljasta dubleeritud
 * elemendid. Ehk näidemassiivi puhul tuleb väljastada
 * ainult 1, 2, 3 - s.t. ilma dubleerimist.
 * NB! Lahenduses tuleb kasutada AINULT ÜKS foreach
 * tsükli abil, samuti EI SAA kasutada
 * grupeerimisfunktisoone ega muuta antud massiivi
 * */
function mitteDubleeri($massiivDub){
    $tempar = array();
    $tempar[0] = $massiivDub[0];
    $i = 0;

    foreach ($massiivDub as $vaartus) {
        if ($tempar[$i] != $vaartus) {
            array_push($tempar, $vaartus);
            $i++;
        }
    }
    return $tempar;
}
$naidisDub = array(1, 1, 1, 2, 2, 2, 2, 3);
print_r("Unikaalsed väärtused on: ".implode(",",mitteDubleeri($naidisDub)));