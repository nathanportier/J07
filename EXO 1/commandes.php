  
<?php

$historique_commandes = array ('5.49', '9.99', '5.49', '15.99', '25');

?>

<?php

function afficher_commandes ($historique_commandes){
    $total = 0;
    foreach ($historique_commandes as $value ){
        echo "<p> Une commande " . $value . " euros a été reçus </p>";
    }
        $total = array_sum ($historique_commandes);
        echo "<p> Le total des commandes est de " . $total . " euros </p>";
    

}

afficher_commandes ($historique_commandes)

?>
