<?php

class Person {
    //Properties
    private $name;
    private $eyeColor;
    private $age;

    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
        
    }

    //Methods
    public function setName($name) {
        $this->name = $name;
    }
    
    //referencing a property inside a class
    public function getName() {
        return $this->name;
    }


}

