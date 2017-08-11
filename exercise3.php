<?php

class userClass

{
    private $name = '';
    private $lastname = '';

    public function setFullName($name,$lastname) {
        $this->name = $name;
        $this->lastname = $lastname;
    }
    public function getFullName() {
        return $this->name;
        return $this->lastname;
    }

    function dosomething()
    {
        echo $this->getFullName();
    }
}

$userClass = new userClass();

$userClass->$name= 'Dairon';

$userClass->$lastname= 'Rodriguez';

$userClass->dosomething();
