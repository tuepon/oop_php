<?php
class User{
  public function __construct(){
    echo 'User construct...<br>';
  }

  public function __destruct(){
    echo '...User desctruct <br>';
  }
}

function sum(int $num1, int $num2){
  return $num1 + $num2;
}

try{
  $user = new User();
  //echo sum('Test',2);
  //$result = eval("var_dup(1);");
  require('./required.php');
} catch (Exception $e) {
  echo $e->getMessage();
} catch(Error $e){
  echo '<strong>'.get_class($e).' on line '.$e->getLine().' of '.$e->getFile().': </strong>'.$e->getMessage().'<br>';
}