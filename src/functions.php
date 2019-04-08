

<?php

class functions{
	public $firstNumber;
    public $secondNumber;
    public $result;

	public function __construct($firstNumber,$secondNumber,$result){

		$this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->result = $result;

	}
	
	public function totalMoney(){
        return $this->firstNumber*$this->secondNumber;
		
	}

	public function totalResult(){
        return $this->firstNumber*$this->secondNumber/$this->secondNumber;
		
    }
    public function getResult(){
        return    $this->result;
    }
	
}
		