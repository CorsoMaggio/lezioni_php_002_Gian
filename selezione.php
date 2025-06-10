<?php

$age = 12;// intero
const MAX = 18;
//se(eta maggiore e uguale di 18) fai qualcosa altrimenti fai altro

/*if(!($age >= MAX)){
  echo 'sono maggiorenne'; 
}*/

/*if($age >= MAX){
  echo 'sono maggiorenne'; 
}else{
  echo 'Sono minorenne';
}*/
$age = readline('Quanti anni hai?');

if($age > MAX){
  echo 'Sono maggiorenne e ho più di 18 ANNI'; 
}elseif ($age < MAX){
  echo 'Sono minorenne';
}else{
  echo 'Sono maggiorenne ed ho esattamente 18 ANNI';
}