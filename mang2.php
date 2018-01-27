<?php

/*
 * Created by PhpStorm.
 * User: liinareb
 * Date: 15.01.2018
 * Time: 21:21
 */
/* name on oluline! selle järgi server teab, mis infot võtta
GET -meetodi puhul aadrssreal andmed näha, testimisel kasulik seda kasutada
POST - andmed pole nähtaval
REQUEST - jõuavad mõlemad andmed, kasutatakse nt kui front-end on eraldatud muust andmetöötlusest
kuna JS brasuseris välja lülitatav, tuleb scriptis eraldi kontroll teha*/

function vorm(){
    $serveriArv = $_POST['serveriArv'];
    $korrad = $_POST['korrad'];


    $serveriArv = isset($serveriArv) ? $serveriArv: rand(1,20);     //juhul kui on määratud
    $korrad = isset($korrad) ? ++$korrad: 0;
    echo 'Mõtle välja arv vahemikus 1-20'.'<br/>';                  // väljastan millises vahemikus genereeritakse arv
    echo '
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
    <input type="hidden" name="serveriArv" value="'.$serveriArv.'">
    <input type="hidden" name="korrad" value="'.$korrad.'">
    <input type="text" name="kasutajaArv"><br />
    <input type="submit" value="Kontrolli">
    
    </form>
    ';
}

function vormiAndmed(){
    echo '<pre>';
    print_r($_POST);
    echo '<pre>';
    $korras = false;
    if(empty($_POST)){
        echo 'Vorm ei saatnud andmeid<br/>';
    } else {
        echo  'Andmed on saadetud<br/>';
        if(empty($_POST['kasutajaArv'])){
            echo 'Andmed peavad olema sisestatud<br />';
        }else {
            echo 'Andmed on sisestatud<br/>';
            $korras = true;
        }
    }
    return $korras;
}

function arvuKontroll($kasutajaArv, $serveriArv, $korrad){
    if($kasutajaArv > $serveriArv) {
        echo ' Pakutud väärtus on suurem<br/>';
    }
    if($kasutajaArv < $serveriArv) {
        echo 'Pakutud arv on väiksem<br/>';
    }
    if(abs($serveriArv - $kasutajaArv) <= 5){
        if($kasutajaArv == $serveriArv){
            echo 'Õnnitlen! Arvasid ära!<br/>'.'Arvasid ära '.++$korrad.' korraga';
            exit;
        }
            echo 'Aga oled juba väga lähedal<br/>';
        }
    }


vorm();

//vormiAndmed();
if(vormiAndmed()){
    arvuKontroll($_POST['kasutajaArv'],  $_POST['serveriArv'], $_POST['korrad']);
} else {
    echo 'Andmed ei ole sisestatud<br/>';
}
