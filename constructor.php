<?php

class BankAccount {
	private $accountNumber;
	private $totalBalance;

	public function __construct() {
		$args = func_get_args();
		$num = func_num_args();
		if (method_exists($this, $f = 'init_' . $num)) {
			call_user_func_array(array($this, $f), $args);
		}
	}

	public function init_1($accountNo) {
		$this->accountNumber = $accountNo;
	}

	public function init_2($accountNo, $initialAmount) {
		$this->accountNumber = $accountNo;
		$this->totalBalance = $initialAmount;
	}
}

$a1 = new BankAccount('121412324', 2000);
var_dump($a1);

$a2 = new BankAccount('232321242');
var_dump($a2);

class FileUtil {
	private $handle;
	private $filename;

	public function __construct($filename, $mode) {
		$this->filename = $filename;
		$this->handle = fopen($filename, $mode);
	}

	public function __destruct() {
		if ($this->handle) {
			fclose($this->handle);
		}
	}

	public function display() {
		echo fread($this->handle, filesize($this->filename));
	}
}

$fu = new FileUtil('./test.txt', 'r');
$fu->display();

?>