<?php

$produits = array (
      'T-shirt rouge' => 15.50,
  'T-shirt vert' => 15.50,
 'T-shirt argent' => 16.50,
    'Short bleu' => 19.99,
    'Short vert' => 19.99,
    'Veste argent' => 35);

function afficher_produits($produits){
    echo "<table>";
    foreach ($produits as $name => $prix) {
     echo "<tr>"; 

     echo "<td>";
     echo "$name";
     echo "</td>";

     echo "<td>";
     echo "$prix";
     echo"</td>";

     echo "</tr>";
    }

    echo "</table>";
}

afficher_produits($produits)

?>
 