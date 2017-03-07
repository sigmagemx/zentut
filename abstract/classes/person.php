<?php

abstract class Person {
	protected $firstName;
	protected $lastName;

	public function __construct($firstName, $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function __toString() {
		return sprintf('%s, %s', $this->lastName, $this->firstName);
	}

	abstract public function getSalary();
}