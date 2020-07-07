<?php

$date1 = new DateTime ("2020-07-03");
echo "<p>Date 1 : " . $date1 -> format ("Y-m-d H:i:s") . "</p>";

$date2 = new DateTime ("2020-06-22 09:00:00");
echo "<p>Date 2 : " . $date2 -> format ("Y-m-d H:i:s") . "</p>";

$diff = $date1->diff($date2); 
$diffh = $date1->diff($date2); 
$diffi= $date1->diff($date2); 

echo $diff->d." Jours, "; 
echo $diffh->h." Heures, "; 
echo $diffi->i." Minutes, depuis le début de l'ISCC. ";

?>