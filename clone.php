<?php

class Person {
	private $ssn;
	private $firstName;
	private $lastName;

	public function __construct($ssn, $firstName, $lastName) {
		$this->ssn = $ssn;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function __destruct() {
		echo sprintf('Person with SSN# %s is terminated.', $this->ssn);
	}

	public function __toString() {
		return sprintf('SSN: %s, Name: %s, %s', $this->ssn, $this->lastName, $this->firstName);
	}

	public function __clone() {
		echo 'Copying object <br>';
	}
}

$p1 = new Person('1234567888', 'Doe', 'John');
echo $p1;

$p2 = new Person('1234567889', 'Grace', 'Dell');
echo $p2;

$p2 = $p1;

$p2 = clone $p1;

?>