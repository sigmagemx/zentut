<?php

class Person {
	private $firstName;

	public function __get($propertyName) {
		echo "attempted to read non-existing property: $propertyName";
	}

	public function __set($propertyName, $propertyValue) {
		echo "attempted to write to non-existing property: $propertyName";
	}
}

$p = new Person();

$p->firstName = 'Doe';
echo $p->firstName;

$p->lastName = 'John';
echo $p->lastName;


class Person2 {
	private $properties;

	public function __get($propertyName) {
		if (array_key_exists($propertyName, $properties)) {
			return $this->properties[$propertyName];
		}
	}

	public function __set($propertyName, $propertyValue) {
		$this->properties[$propertyName] = $propertyValue;
	}
}

$p = new Person2();
$p->lastName = 'John';
$p->firstName = 'Doe';

var_dump($p);


class CString {
	private $str = '';

	private $APIs = array('strlen', 'strtoupper', 'strtolower');

	public function __construct($str) {
		$this->str = $str;
	}

	public function __call($method, $args) {
		if (in_array($method, $this->APIs)) {
			array_unshift($args, $this->str);
			return call_user_func_array($method, $args);
		} else {
			die('Error: call to unsupported method: ' . $method);
		}
	}
}

$str = new CString('This is a string object');
echo $str->strlen() . ' ';
echo $str->strtoupper() . ' ';
echo $str->strtolower() . ' ';

echo $str->len();

?>