<?php

require './vues/v_entete.php';
$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_STRING);
if (empty($uc)){
    $uc='accueil';
}

switch($uc){
    case 'accueil':
        include './controleurs/c_accueil.php';
        break;
    case 'cv':
        include './controleurs/c_cv.php';
        break;
}
require './vues/v_pied.php';
?>
