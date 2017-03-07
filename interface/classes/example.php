<?php

interface IMyInterface {
	const INTERFACE_CONSTANT_1 = 1;
	const INTERFACE_CONSTANT_2 = 'a string';

	public function method_1();
	public function method_2();
}

class MyClass implements IMyInterface {
	public function method_1() {
		// method 1 implementation
	}

	public function method_2() {
		// method 2 implementation
	}
}

interface IReadable() {
	public function read();
}

interface IWriteable extends IReadable {
	public function write();
}