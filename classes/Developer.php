<?php
class Developer extends Employee {
    public $programmingLanguage;

    public function __construct($name, $role, $salary, $age, $programmingLanguage) {
        parent::__construct($name, $role, $salary, $age);
        $this->programmingLanguage = $programmingLanguage;
    }

    public function getProgrammingLanguage() {
        return $this->programmingLanguage;
    }

    public function getDetails() {
        return parent::getDetails() .
               "Programming Language: " . $this->getProgrammingLanguage() . "<br><br>";
    }
}