<?php

class Person {
    // Properties
    protected $name;
    protected $email;

    public function __construct( $name, $email ) {
        $this->name = $name;
        $this->email = $email;
    }

    public function setName( $name ) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail( $email ) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

}

// $person = new Person('NAME','E-MAIL');

// echo $person->getName();

// echo $person->getEmail();