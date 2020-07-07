<?php

$panier = [
    array ("T-shirt rouge ", 15.50,5),
    array ("T-shirt vert", 15.50,6), 
    array ("T-shirt argent", 15.50,8),
    array ("Short bleu", 16.50,5), 
    array ("Short vert", 19.99,5),
    array ("Veste argent", 19.99,10),
    array ("Veste argent", 35,3),

];

function afficher_panier ($panier)
{
    foreach ($panier as $table) 
    {
        echo "<ul>";
        foreach ($table as $list)
        echo "<li>" . $list . "</li>";
        echo " </ul>";

    }

}

afficher_panier ($panier);

function calculer_total_panier ($panier) 
{
    $prix = 0;

    foreach ($panier as $table) 
    {
        $prix = $table[1]+$prix;

    } 
    return ($prix);
}

echo "<p>Le prix total du panier est de " . calculer_total_panier ($panier) . " euros.</p>";

calculer_total_panier ($panier);
?>
