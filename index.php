<?php
#Exercise1
    // Afficher les voitures
    $cars = array('Dastun', 'Honda', 'BMW');
    sort($cars);
    foreach ($cars as $key => $value) {
        echo $value."\n";
    }
    
?>

 <?php
#Exercise2
 $month = 'march';
 // Tableau des mois
 $months = array('jan', 'feb', 'march', 'april', 'may','june','july','august','september','november','december');
 // Iteration du tableau
 foreach (array_keys($months, $month) as $key) {
 // unset() suppression
   unset($months[$key]);
  }
 
   var_dump($months);
?>

<?php
#Exercise3
//Inversion chaine de caractere
    $chaine = "Bon wee-kend";
    echo strrev($chaine);

?>

<?php
#Exercise4
 //Sous-ensemble
    $tab = Array(2,3, 4, 5, 6,7,8, 10, 9);
    $tab1 = Array(2, 3);

    if ( array_intersect($tab1, $tab) === $tab1) {
        echo 'tab1 est un sous-ensemble de tab';
    } else {
        echo "il n'existe pas de sous-ensemble";
    }

?>
