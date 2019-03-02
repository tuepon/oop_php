<?php

/* function g1($foo){
  $bar = yield from g2($foo);
  return $bar;
}

function g2($foo){
  yield $foo;
  yield 'World';
  return 'Return Value of g2';
}

$g1 = g1('Hello');

foreach($g1 as $g){
  echo $g;
}
echo $g1->getReturn(); */

/* function g(){
  yield 1;
  yield from [2,3,4];
  yield 5;
}

$g = g();

foreach($g as $y){
  echo $y;
} */

/* function g(){
  yield 1;
  yield from new ArrayIterator([2,3,4]);
  yield 5;
}

$g = g();

foreach($g as $y){
  var_dump($y);
} */

function g1(){
  yield 2;
  yield 3;
  return 30;
}

function g2(){
  yield 1;
  $g1result = yield from g1();
  yield 4;
  return $g1result;
}

$g = g2();

foreach($g as $y){
  echo $y;
}

var_dump($g->getReturn());