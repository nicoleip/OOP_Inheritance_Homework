<?php

class Student extends Person
{
	private $score;
	
	public function __construct($name, $age, $isMale, $score){
		if($score >= 2 && $score <=6){
		$this->name = $name;
		$this->age = $age;
		$this->isMale = $isMale;
		$this->score = $score;
		}else{
			echo ' Please enter a correct value for the student\'s GPA!';
		}
		
	}
	
	public function getScore()
	{
		return $this->score;
	}
	
	public function setScore($score){
		if($score >= 2 && $score <=6){
			$this->score = $score;
		}else{
			echo ' Incorrect value for the student\'s score';
		}
	}
	
	public function showStudentInfo() 
	{
	echo $this->showPersonInfo() , PHP_EOL;
	return sprintf(
			'This student\'s GPA is: %g',
			$this->getScore()
			);
	}
}

