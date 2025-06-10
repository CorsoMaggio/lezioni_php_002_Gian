<?php
echo "Inserisci il tuo budget massimo: ";
$budget = (float) trim(fgets(STDIN));

while ($budget >0){
  echo "Aggiungo al carrello! \n";
  echo "Inserisci il costo dell'articolo: ";
  $costo_articolo = (float) trim(fgets(STDIN));
  if($costo_articolo > $budget) {
    echo "Il budget non è sufficiente per acquistare l'articolo. Inserisci un articolo dal valore minore.\n";
    continue;
  }
  $budget -= $costo_articolo;
  if ($budget < 0) {
    $budget = 0;
  }
   echo "Il budget rimanente è: $budget\n";

    if ($budget == 0) {
        echo "Hai terminato il budget!\n";
        break;
    }
}

echo "Grazie per aver fatto acquisti!\n";

