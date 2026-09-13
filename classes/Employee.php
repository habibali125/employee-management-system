<?php
class Employee {
    public $name;
    public $role;
    public $salary;
    public $age;

    public function __construct($name, $role, $salary, $age) {
        $this->name = $name;
        $this->role = $role;
        $this->salary = $salary;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getRole() {
        return $this->role;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getAge() {
        return $this->age;
    }

    public function getDetails() {
        return "Name: " . $this->getName() . "<br>" .
               "Role: " . $this->getRole() . "<br>" .
               "Salary: $" . number_format($this->getSalary()) . "<br>" .
               "Age: " . $this->getAge() . "<br><br>";
    }

    public function getAnnualSalary() {
        return number_format($this->getSalary() * 12);
    }
}