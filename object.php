<?php

class BankAccount {
	private $accountNumber;
	private $totalBalance;

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
}

$account = new BankAccount();

$account->setAccountNumber('1243845355');
echo sprintf('Bank account # %s<br/>', $account->getAccountNumber());

echo sprintf('Deposit $2000 to the bank account.<br/>');
$account->deposit(2000);
echo sprintf('Total balance %0.2f<br/>', $account->getBalance());

echo sprintf('Withdraw $100 from the bank account.<br/>');
$account->withdraw(100);
echo sprintf('Total balance %0.2f<br/>', $account->getBalance());

echo sprintf('Withdraw $2000 from the bank account.<br/>');
$account->withdraw(2000);

var_dump($account);
?>