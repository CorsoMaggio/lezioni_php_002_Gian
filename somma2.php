<?php 
for($i = 1; $i <= 30; $i++) {
  if (($i % 3) === 0){
    echo "PHP,";
  } elseif (($i % 5) === 0){
    echo "JAVASCRIPT,";
  } elseif (($i % 15) === 0){
    echo "Francesco,";
  } else {
    echo $i . ",";
  }    
}
