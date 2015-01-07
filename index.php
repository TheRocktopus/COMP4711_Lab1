<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>COMP4711 Lab1</title>
	</head>
	<body>
		<?php
		
		require_once("Student.php");
		
		$students = array();
		
		// add first student
		$first = new Student();
		$first->surname = "Doe";
		$first->firstName = "John";
		$first->add_email('home', 'john@doe.com');
		$first->add_email('work', 'jdoe@mcdonalds.com');
		$first->add_grade(65);
		$first->add_grade(75);
		$first->add_grade(55);
		$students['j123'] = $first;
		
		// add second student
		$second = new Student();
		$second->surname = "Einstein";
		$second->firstName = "Albert";
		$second->add_email('home', 'albert@brainiacs.com');
		$second->add_email('work1', 'a_einstein@bcit.ca');
		$second->add_email('work2', 'albert@physics.mit.edu');
		$second->add_grade(95);
		$second->add_grade(80);
		$second->add_grade(50);
		$students['a456'] = $second;
		
		ksort($students);
		
		foreach( $students as $student )
		{
			echo $student->toString();
		}
		
		?>
	</body>
</html>