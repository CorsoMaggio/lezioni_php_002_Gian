<?php 
$somma = 0;
for($i = 1; $i <= 10; $i++) {
  if (($i % 2) === 0){
    $somma += $i;
  }
}

echo "La somma di tutti i numeri pari tralasciando quelli dispari è: " . $somma . "\n";