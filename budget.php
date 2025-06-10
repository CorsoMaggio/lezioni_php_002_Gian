<?php
const BUDGET = 1000;

echo "Inserisci una cifra in euro: ";
$input = trim(fgets(STDIN));

$cifra = (float)$input;

if ($cifra > BUDGET) {
    echo "ERROR: la cifra inserita supera il budget di " . BUDGET . " EURO.\n";
} else {
    $valore_calcolato = round($cifra / 3, 2);
    echo "Paga in 3 comode rate da: $valore_calcolato EURO\n";
}
