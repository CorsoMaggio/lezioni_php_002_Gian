<?php
/*
//For 
//Stampare tutti i numeri da 1 a 100
$array = [1,2,3,4,5];

echo $array[0] . "\n";
echo $array[1] . "\n";
echo $array[2] . "\n";
echo $array[3] . "\n";
echo $array[4] . "\n";*/

/*for ($i = 1; $i <= 100; $i++) {
  if ($i < 50) {
    echo $i . ",";
  }else{
    echo $i . "\n";
  }
}*/

/*$students = ['Antonio', 'Marco', 'Elisa'];

for ($i = 0 ;$i < count($students) ; $i++){
  echo "Ciao " . $students[$i] . "\n";
}*/


/*$students = [
    [
        'name' => 'Marco',
        'age' => 21,
    ],
    [
        'name' => 'Maria',
        'age' => 22,
    ],
    [
        'name' => 'Jack',
        'age' => 16,
    ],
];

for ($i = 0 ;$i < count($students) ; $i++){
  //Dobbiamo controllare age
  if ($students[$i]['age'] >= 18){
    echo "Ciao mi chiamo " . $students[$i]['name'] . "\n";
  } else {
    echo "Sei minorenne";
  }
  
}*/

//Foreach

/*$students = [
    [
        'name' => 'Marco',
        'age' => 21,
    ],
    [
        'name' => 'Maria',
        'age' => 22,
    ],
    [
        'name' => 'Jack',
        'age' => 16,
    ],
];

foreach($students as $i => $student) {
  echo "sto stampando l'elemento con posizione: $i \n";
  if ($student['age'] >= 18){
      echo "Ciao mi chiamo " . $student['name'] . "\n";
  } else {
      echo "Sei minorenne";
  } 
}*/

/*foreach ($students as $student) {
  if ($student['age'] < 22) {
    continue;
  }

  echo $student['name'] . "\n";
}*/

//Precondizionale
/*$i = 0;
while ($i <= 10) {
  echo "$i \n";
  $i++;
}*/

/*$menu = false;
while(!$menu){
  echo "Aggiungo al carrello. \n";
  echo "Devi aggiungere altro al carrello? S/N:";
  $domanda =  trim(fgets(STDIN));
  if ($domanda == 'S') {
    $menu = false;
  } else {
    $menu = true;
  }
}*/

//Post-condizionale
/*$i = 11;
do{
  echo "$i \n";
  $i++;
} while ($i <= 10);

while($i <= 10) {
  echo "$i \n";
  $i++;
}*/