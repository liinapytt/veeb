<?php
/**
 * Created by PhpStorm.
 * User: liinareb
 * Date: 14.12.2017
 * Time: 14:33
 */
function tabel ($sona1, $sona2, $sona3, $sona4){
    echo '<table border="1">';
         for($rida = 1; $rida <= 4; $rida++){
            echo '<tr>';
                echo '<td>';
                // muutuja genereerimine ${}
                    echo ${'sona'.$rida};
                echo '</td>';
            echo '</tr>';
    }
    echo '</table>';
}
tabel('1', '2', '3', '4');