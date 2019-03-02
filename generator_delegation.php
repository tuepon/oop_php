<?php

function g1($foo){
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
echo $g1->getReturn();