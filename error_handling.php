<?php
class User{
  public function __construct(){
    echo 'User construct...<br>';
  }

  public function __destruct(){
    echo '...User desctruct <br>';
  }
}

function run($object){
  $object->hello();
}

try{
  $user = new User();
  run(null);
} catch(Error $e) {
  echo '<strong>Error on line:'.$e->getLine().' in '.$e->getFile().'</strong>'.$e->getMessege().'<br>';
} finally{
  echo 'Finally Ran...<br>';
}