<?php
require_once 'autoload.php';

$pplArray = [
		new Person('Sabina', 22 , false),
		new Person('Mitko', 26, true),
		new Student('Galya', 24, false, 4.87),
		new Student('Koki', 19, true, 3.15),
		new Employee('Dani', 28, true, 36),
		new Employee('Simona', 17, false, 25),
];

foreach ($pplArray as $person){
	if (get_class($person) == 'Person'){
		echo $person->showPersonInfo() , PHP_EOL;
	}else if(get_class($person) == 'Student'){
		echo $person->showStudentInfo() , PHP_EOL;
	}else if(get_class($person) == 'Employee'){
		echo $person->showEmployeeInfo() , PHP_EOL;
	}else{
		echo ' Unrecognized class type!';
	}
}

foreach ($pplArray as $employee){
	if(get_class($employee) == 'Employee'){
		echo $employee->getName().' should receive '.$employee->calculateOvertime(2).
		' lv for his/her overtime.', PHP_EOL;
	}
}