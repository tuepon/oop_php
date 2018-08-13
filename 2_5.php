<?php
	class User {
		private $name;
		private $age;

		public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
		}
    }
    
    $user1 = new User('John, 40');

    echo $user->name;
    