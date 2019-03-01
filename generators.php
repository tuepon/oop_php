<?php

/* function myCounter(){
  echo 'Counter starting...<br>';
  for($i = 0; $i < 10; $i++){
    yield 'Yielded '.$i.'<br>';
  }
  echo 'Counter stopped...';
}

foreach(myCounter() as $c){
  echo $c;
} */

function readLines($filename){
  $file = fopen($filename, 'r');
  $i = 0;
  while(($line = fgets($file)) !== false){
    $key = $i;
    yield $key => $line;
    $i++;
  }
  fclose($file);
}

foreach(readLines('test.txt') as $key => $line){
  echo $key .' - '. $line.'<br>';
}