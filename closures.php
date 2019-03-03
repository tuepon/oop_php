<?php
class User{
  private $username;
  private $email;

  public function __construct($username, $email){
    $this->username = $username;
    $this->email = $email;
  }
}

$getUserEmail = function(){
  return $this->username.'\'s email address is '.$this->email; 
};

$user = new User('JohnDoe', 'jdoe@example.com');

/*
$email = $getUserEmail->bindTo($user, 'User');
echo $email();
*/

echo $getUserEmail->call($user);