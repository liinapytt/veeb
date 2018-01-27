<?php
/**
 * Created by PhpStorm.
 * User: liinareb
 * Date: 27.01.2018
 * Time: 16:37
 */

require_once 'db_conf.php'; // nõuame konfiguratsioonifaili sisu kasutamist
// andmebaasi serveriga ühendamine ja
// andmebaasi valik
function yhendus(){
    $yhendus = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$yhendus){
        echo 'Puudub ühendus andmebaasi serveriga<br />';
        echo mysqli_connect_error().'<br />';
        echo mysqli_connect_errno().'<br />';
        return false;
    } else {
        echo 'Ühendus andmebaasiserveriga on olemas<br />';
        return $yhendus;
    }
}
// päringu saatmise funktsioon
function saadaParing($yhendus, $sql){
    $tulemus = mysqli_query($yhendus, $sql);
    if(!$tulemus){
        echo 'Probleem päringuga '.$sql.'<br />';
        echo mysqli_error($yhendus).'<br />';
        echo mysqli_errno($yhendus).'<br />';
        return false;
    } else {
        echo 'Päring läks läbi<br />';
        return $tulemus;
    }
}
// andmetega päringu saatmise funktsioon
function annaAndmed($yhendus, $sql){
    $tulemus = saadaParing($yhendus, $sql);
    $andmed = array(); // massiv, kuhu paneme päringuga tulnud andmed
    if($tulemus != false){
        while($rida = mysqli_fetch_assoc($tulemus)){
            $andmed[] = $rida;
        }
    }
    if(count($andmed) == 0){
        return false;
    } else {
        // tagastame päringu andmetega täidetud massiiv
        return $andmed;
    }
}