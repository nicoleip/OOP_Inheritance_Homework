<?php

class Person
{
	protected $name;
	protected $age;
	protected $isMale;
	
	public function __construct($name, $age, $isMale)
	{
		$this->name = $name;
		$this->age = $age;
		$this->isMale = $isMale;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
	
	public function setAge($age)
	{
		$this->age = $age;
	}
		
	public function getGender()
	{
	if($this->isMale){
			return 'male';			
		}else{
			return 'female';
		}
	}
	
	public function setGender($isMale){
		$this->isMale = $isMale;
	}
	
	public function showPersonInfo()
	{
		return sprintf(
				"Person -- Name: %s, Age: %d, Gender: %s",
				$this->getName(),
				$this->getAge(),
				$this->getGender()				
				);		
	}
	
}
