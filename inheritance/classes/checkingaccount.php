<?php

class CheckingAccount extends BankAccount {
	private $fee;

	public function __construct($accountNo, $initialAmount, $fee) {
		parent::__construct($accountNo, $initialAmount);
		$this->fee = $fee;
	}

	public function deductFee() {
		parent::withdraw($this->fee);
	}

	public function __toString() {
		$str = parent::__toString();
		$str .= sprintf('<br/>Montly fee:%0.2f', $this->fee);
		return $str;
	}
}