<?php
class User{
  public function __construct(){
    echo 'User construct...<br>';
  }

  public function __destruct(){
    echo '...User desctruct <br>';
  }
}

try{
  $user = new User();
} catch(Exception $e){
  echo $e->getMessege();
}