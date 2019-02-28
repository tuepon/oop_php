<?php

class MyClass{
  protected $myFoo;
  protected $myBar = 'I am the myBar property';

  public function __construct($val){
    $this->myFoo = $val;
  }

  public function returnProp($propName){
    if(!empty($this->$propName)){
      return $this->$propName;
    } else {
      return 'Property Not Found<br>';
    }
  }
}

class MyClassExtension extends MyClass{
  protected $myBar = 'I am an extended object';
}

/*
$object = new MyClassExtension('Extended');
echo $object->returnProp('myFoo');
echo $object->returnProp('myBar');
*/

$object = new class('Anonymous') extends MyClass{
  protected $myBar = 'I am an anonymous object';
};

echo $object->returnProp('myFoo');
echo $object->returnProp('myBar');