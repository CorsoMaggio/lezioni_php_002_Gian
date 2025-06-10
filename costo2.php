<?php

echo "Inserisci il tuo ordine: ";
$ordine = trim(fgets(STDIN));

$Output = match ($ordine) {
    "pizza" => "Hai ordinato una Pizza con un costo di 6 Euro.",
    "birra" => "Hai ordinato una Birra con un costo di 3 Euro.",
    "panino" => "Hai ordinato un Panino con un costo di 8 Euro.",
    "insalata" => "Hai ordinato un Insalata ma al momento non è disponibile.",
    "dessert" => "Hai ordinato un Dessert con un costo di 3 Euro.",
    default => "L'ordine non è presente nel menu."
};

echo $Output;

?>