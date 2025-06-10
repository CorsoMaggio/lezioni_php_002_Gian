<?php

/*$age = 12;// intero
const MAX = 18;*/
//se(eta maggiore e uguale di 18) fai qualcosa altrimenti fai altro

/*if(!($age >= MAX)){
  echo 'sono maggiorenne'; 
}*/

/*if($age >= MAX){
  echo 'sono maggiorenne'; 
}else{
  echo 'Sono minorenne';
}*/
/*$age = readline('Quanti anni hai?');

if($age > MAX){
  echo 'Sono maggiorenne e ho più di 18 ANNI'; 
}elseif ($age < MAX){
  echo 'Sono minorenne';
}else{
  echo 'Sono maggiorenne ed ho esattamente 18 ANNI';
}
*/
//switch case

/*$age= "12";
switch ($age){
  case $age > 18:
    echo "Sono maggiorenne e ho più di 18 ANNI"; 
    break;
  case $age < 18:
    echo "Sono minorenne e non dovrei vedere questo messaggio";
    break;
  default:
    echo "Sono maggiorenne ed ho esattamente 18 ANNI";
  }*/
$role = "Admin";
$output = match ($role) {
  'Admin' => 'Sono un Admin',
  'Moderatore' => 'Sono un Moderatore',
  default => 'Altro'
};