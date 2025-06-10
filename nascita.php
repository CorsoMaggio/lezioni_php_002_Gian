<?php
// ottenere l'età
// La console deve dire che hai accesso alla piattaforma se hai più di 4 anni

echo "Inserisci il tuo anno di nascità: ";
$BirthY = (int) trim(fgets(STDIN));
echo "Inserisci l'anno attuale: ";
$CurrentY = (int) trim(fgets(STDIN));

$age = $CurrentY - $BirthY;

if ($BirthY > $CurrentY) {
    echo 'I dati inseriti non sono corretti';
} else if ($age >= 4) {
    echo 'Puoi accedere alla piattaforma perchè hai: ' . $age . ' anni.';
} else {
    echo "Non puoi accedere alla piattaforma, devi avere almeno 4 anni";
}

