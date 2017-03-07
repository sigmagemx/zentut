<?php
require_once 'classes/person.php';

class Employee extends Person {
	private $salary;

	public function __construct($firstName, $lastName, $salary) {
		parent::__construct($firstName, $lastName);
		$this->salary = $salary;
	}

	public function getSalary() {
		return $this->salary;
	}

	public function __toString() {
		return sprintf('Name: %s<br> Salary: $%0.2f', parent::__toString(), $this->salary);
	}
}