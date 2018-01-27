<?php
/**
 * Created by PhpStorm.
 * User: liinareb
 * Date: 12.01.2018
 * Time: 8:40
 * Assotsiatiivsed massiivid, korralikult väljastamiseks ainult foreach tsükkel*/
$opilane = array(
    'eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 15,
    'klass' => 9
);
/* 'item' ja element'*/

echo '<pre>';
print_r($opilane);
echo '<pre>';

foreach ($opilane as $vaartus){
    echo $vaartus.'<br />';
}

foreach ($opilane as $element => $vaartus){
    echo $element.' - '.$vaartus.'<br />';
}



