<?php
require_once 'classes/person.php';

class Contractor extends Person {
	private $rate;
	private $billableHours;

	public function __construct($firstName, $lastName, $rate, $billableHours) {
		parent::__construct($firstName, $lastName);

		$this->rate = $rate;
		$this->billableHours = $billableHours;
	}

	public function getSalary() {
		return $this->rate * $this->billableHours;
	}

	public function __toString() {
		return sprintf('Name:%s<br>Salary:$%0.2f', parent::__toString(), $this->getSalary());
	}
}