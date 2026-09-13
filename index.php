<?php
require 'classes/Employee.php';
require 'classes/Developer.php';
require 'classes/Manager.php';

$employee1 = new Employee("Habib", "Team Lead", 160000, 28);
$employee2 = new Developer("Hassan", "Front End", 18000, 25, "PHP");
$employee3 = new Developer("Ali", "Back End", 20000, 30, "Python");
$employee4 = new Developer("Ahmed", "Full Stack", 25000, 32, "Node.js");
$employee5 = new Manager ("Adeel", "DevOps", 30000, 35, 10);

$employees = [$employee1, $employee2, $employee3, $employee4, $employee5];

foreach ($employees as $employee) {
     echo" <br>";
    echo $employee->getDetails();

    echo $employee->getAnnualSalary();
}
