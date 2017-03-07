<?php

require_once 'classes/employee.php';
require_once 'classes/contractor.php';

$e = new Employee('John', 'Doe', 5000);
echo $e;

echo '<br>';


$c = new Contractor('David', 'Hill', 75, 175);
echo $c;