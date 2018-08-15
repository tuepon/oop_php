<?php
  class User{
    public $name;
    public $age;

    public function __construct($name, $age){
      //echo 'constructor ran...';
      $this->name = $name;
      $this->age = $age;
    }

    public function sayHello(){
      return $this->name . ' Says Hello';
    }

    public function __destruct(){
      echo 'destructor ran...';
    }
  }

  $user1 = new User('Tomo', 52);
  echo $user1->name . ' is ' . $user1->age . ' years old';
  echo '<br>';
  echo $user1->sayHello();
