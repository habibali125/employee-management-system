<?php
require 'classes/Employee.php';
require 'classes/Developer.php';
require 'classes/Manager.php';
require 'db.php';

$stmt = $pdo->query("SELECT * FROM employees");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$employees = [];
foreach ($rows as $row) {
    $employees[] = new Employee($row['name'], $row['role'], $row['salary'], $row['age']);
}

foreach ($employees as $employee) {
    echo "<br>";
    echo $employee->getDetails();
    echo $employee->getAnnualSalary();
}