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



foreach($arrays as $person) {
  $nome = $person ['name'];
  if ($person['gender'] == 'M'){
      echo "Buongiorno Sig. $nome\n";
  } elseif ($person['gender'] == 'F'){
    echo "Buongiorno Sig.ra $nome\n";
  } else {
    echo "$nome ha preferito non specificare.";
  } 
}