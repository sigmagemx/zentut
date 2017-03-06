<?php

class SavingAccount extends BankAccount {
	private $interestRate;

	public function __construct($accountNo, $initialAmount, $interestRate) {
		parent::__construct($accountNo, $initialAmount);
		$this->interestRate = $interestRate;
	}

	public function addInterest() {
		$amount = parent::getBalance() * $this->interestRate / 100;
		parent::deposit($amount);
	}

	public function __toString() {
		$str = parent::__toString();
		$str .= sprintf('<br/>Interest rate:%0.2f', $this->interestRate);
		return $str;
	}
}