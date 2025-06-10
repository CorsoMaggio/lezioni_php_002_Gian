<?php
// Inserisci il tuo ordine
// Ci sono degli ordini predefiniti che se scritti, danno dei messaggi predefiniti.
// Chiedere se vi vuole continuare con l'ordine? si o no
// Se si risponde di no, non si fanno più domande e si mostra di nuovo il messaggio predefinito dell'ordine fatto
// Se si risponde di si, viene chiesto "Inserisci nel tuo ordine"? come prima e rifacendo 
// Chiedere se vi vuole continuare con l'ordine? si o no

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

echo "Vuoi continuare con il tuo ordine? (si/no): ";
$scelta = trim(fgets(STDIN));

if (($scelta) === 'si') {
  echo "Inserisci il tuo ordine: ";
  $ordine = trim(fgets(STDIN));
}else {
  echo "Grazie per aver ordinato a RandomPizza!";
}