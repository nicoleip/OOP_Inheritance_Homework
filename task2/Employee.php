<?php

class Employee extends Person
{
	private $daySalary;
	
	public function __construct($name, $age, $isMale, $daySalary){
			$this->name = $name;
			$this->age = $age;
			$this->isMale = $isMale;
			$this->daySalary = $daySalary;
			
	}
	
	public function getDaySalary()
	{
		return $this->daySalary;
	}
	
	public function setDaySalary($daySalary)
	{
		$this->daySalary = $daySalary;
	}
	
	public function calculateOvertime($hours)
	{
		if($this->age < 18){
			$amount = 0;
		}else{
			$amount = $hours * ($this->daySalary / 8) * 1.5;
		}
		
		return $amount;
	}
	
	public function showEmployeeInfo()
	{
		echo $this->showPersonInfo() , PHP_EOL;
		return sprintf(
				'This employee\'s day salary is: %d lv',
				$this->getDaySalary()
				);
		}
}

