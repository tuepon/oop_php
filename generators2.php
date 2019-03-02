<?php

//Return values from generators sample.

/* function myCounter(){
  echo 'Counter starting...<br>';
  $total = 0;
  for($i = 0; $i <= 10; $i++){
    yield 'Yielded '.$i.'<br>';
    $total += 1;
  }
  return $total;
}

$counter = myCounter();

foreach($counter as $c){
  echo $c;
}

echo 'Total - '.$counter->getReturn(); */



function readLines($filename){
  $file = fopen($filename, 'r');
  $i = 0;
  while(($line = fgets($file)) !== false){
    $key = $i;
    yield $key => $line;
    $i++;
  }
  fclose($file);
  return '<br>'.$i.' lines read from '.$filename;
}

$lines = readLines('test.txt');

foreach($lines as $key => $line){
  echo $key .' - '. $line.'<br>';
}

echo $lines->getReturn();
