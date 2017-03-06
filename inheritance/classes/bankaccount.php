<?php

class BankAccount {
	private $accountNumber;
	private $totalBalance;

	public function __construct($accountNo, $initialAmount) {
		$this->accountNumber = $accountNo;
		$this->totalBalance = $initialAmount;
	}

	public function deposit($amount) {
		$this->totalBalance += $amount;
	}

	public function withdraw($amount) {
		if ($amount > $this->totalBalance) {
			die('Not enough money to withdraw');
		}
		$this->totalBalance -= $amount;
	}

	public function getBalance() {
		return $this->totalBalance;
	}

	public function getAccountNumber() {
		return $this->accountNumber;
	}

	public function setAccountNumber($accountNumber) {
		$this->accountNumber = $accountNumber;
	}

	public function __toString() {
		return sprintf('Account #: %s <br/> Balance:$%0.2f', $this->accountNumber, $this->totalBalance);
	}
}