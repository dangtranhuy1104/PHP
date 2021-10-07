<?php
    class BankAccount{
        private $balance;

        public function __construct($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance;
        }
        public function deposit($amount){
            if($amount > 0)
            {                                                                                           
                $this->balance += $amount;
            }
            return $this;
        }

    }
    class SavingAccount extends BankAccount{//ke thua toan phan
        //tai su dung lai cai ma tu lop cha
        private $interestRate;

        public function __construct($balance, $interestRate){
            parent::__construct($balance);
            $this->interestRate = $interestRate;
        }
        public function setInterestRate($interestRate)
        {
            $this->interestRate = $interestRate;
        }
        public function addInterest(){
            $interest = $this->interestRate * $this->getBalance();
            $this->deposit($interest);
        }
    }            

    $account = new SavingAccount(5000,0.01);
    //$account->deposit(500000);//goi method cha
    //$account->setInterestRate(0.01);
    $account->addInterest();

    echo $account->getBalance();//goi method cha
?>