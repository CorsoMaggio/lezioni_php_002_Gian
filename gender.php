<?php
$arrays = [
  [
    'name' => 'Marco',
    'gender' => 'M',
  ],
  [
    'name' => 'Vanessa',
    'gender' => 'F',
  ],
  [
    'name' => 'Jack',
    'gender' => 'M',
  ],
  [
    'name' => 'Mari*',
    'gender' => '',
  ],
];  


for ($i = 0 ;$i < count($arrays) ; $i++) {
  $nome =$arrays[$i]['name'];
  if ($arrays[$i]['gender'] == 'M') {
    echo "Buongiorno Sig. $nome\n";
  } elseif ($arrays[$i]['gender'] == 'F'){
    echo "Buongiorno Sig.ra $nome\n";
  } else {
    echo "$nome ha preferito non specificare.";
  } 
}