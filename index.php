<?php
require 'Employee.php';

$employee1 = new Employee("Habib", "Team Lead", 160000, 28);
$employee2 = new Employee("Hassan", "Front End", 18000, 25);
$employee3 = new Employee("Ali", "Back End", 20000, 30);
$employee4 = new Employee("Ahmed", "Full Stack", 25000, 32);
$employee5 = new Employee("Adeel", "DevOps", 30000, 35);

$employees = [$employee1, $employee2, $employee3, $employee4, $employee5];

foreach ($employees as $employee) {
     echo" <br>";
    echo $employee->getDetails();
   
    echo $employee->getAnnualSalary();
}
