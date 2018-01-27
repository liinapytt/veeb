<?php
/**
 * Created by PhpStorm.
 * User: liinareb
 * Date: 27.01.2018
 * Time: 16:49
 */
//võtame andmebaasitöötlusfunktsioonid kasutusele
require_once 'db_fnk.php';

//loome andmebaasiga ühenduse
$dbYhendus = yhendus();

// koostame sql käsu ja edastame andmebaasi
$sql = 'SHOW TABLES';
$tulemus = annaAndmed($dbYhendus, $sql);

//uurime tulemuse sisu testkujul
echo '<pre>';
print_r($tulemus);
echo '</pre>';
