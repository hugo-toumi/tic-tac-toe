<?php

// Quand je veux passer d'une base de données à l'autre je passe par ce fichier 


// // BASE PLESK
// $bdd = mysqli_connect('localhost', 'yanis-khiter', 'Yanis13030', 'yanis-khiter_tic-tac-toe'); 
// mysqli_set_charset($bdd , 'utf8');

// MA BASE LOCALE
$bdd = mysqli_connect('localhost', 'root', '', 'tic-tac-toe'); 
mysqli_set_charset($bdd , 'utf8');


?>  