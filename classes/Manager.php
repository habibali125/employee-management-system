<?php
class Manager extends Employee {
    public $teamSize;

    public function __construct($name, $role, $salary, $age, $teamSize) {
        parent::__construct($name, $role, $salary, $age);
        $this->teamSize = $teamSize;
    }

    public function getTeamSize() {
        return $this->teamSize;
    }

    public function getDetails() {
        return parent::getDetails() .
               "Team Size: " . $this->getTeamSize() . "<br><br>";
    }
}