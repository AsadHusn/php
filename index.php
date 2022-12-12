<?php

class User{
    function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }
}

class Employee extends User{
    private $pass;
    function __construct($name, $email, $title, $pass){
        parent::__construct($name, $email);
        $this->title = $title;
        $this->pass = $pass;
    }
}

$emp = new Employee("Asad", "asad@gmail.com", "Manager", '123');

var_export( $emp);


?>
