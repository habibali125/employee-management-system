<?php

$name = "Habib";
$role = "Team Lead";
$experience = 5;
echo "Name: " . $name . "<br>";
echo "Role: " . $role . "<br>";
echo "Experience: " . $experience . " years" . "<br>";

echo "Welcome to Employee Management System";
echo "<br>";

$employees = [
    ["Name" => "Habib" , "Role" => "Team Lead" , "Salary" => 160000 , "Age" => "28"],
    ["Name" => "Hassan" , "Role" => "Front End" , "Salary" => 18000 , "Age" => "25"],
    ["Name"=> "Ali", "Role" => "Back End" , "Salary" => 20000 , "Age" => "30"],
    ["Name"=> "Ahmed", "Role" => "Full Stack" , "Salary" => 25000 , "Age" => "32"],
    ["Name"=> "Adeel", "Role" => "DevOps" , "Salary" => 30000 , "Age" => "35"]
];
echo "Employe Details: <br>";
echo "<br>";
foreach ( $employees as $value) {
    echo "Name: " . $value["Name"] . "<br>";
    echo "Role: " . $value["Role"] . "<br>";
    echo "Salary: " . $value["Salary"] . "<br>";
    echo "Age: " . $value["Age"] . "<br>";
    echo "<br>";
}
echo "Total Employees: ";
echo count($employees) . "<br>";