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
		
		// add third student
		$third = new Student();
		$third->surname = "Banman";
		$third->firstName = "Matt";
		$third->add_email('school', 'mbanman4@my.bcit.ca');
		$third->add_grade(100);
		$third->add_grade(100);
		$third->add_grade(100);
		$students['m789'] = $third;
		
		// add fourth student
		$fourth = new Student();
		$fourth->surname = "Bowie";
		$fourth->firstName = "David";
		$fourth->add_email('work', 'ziggy@stardust.com');
		$fourth->add_grade(45);
		$fourth->add_grade(45);
		$fourth->add_grade(45);
		$students['d000'] = $fourth;
		
		// add fifth student
		$fifth = new Student();
		$fifth->surname = "Lennon";
		$fifth->firstName = "John";
		$fifth->add_email('work', 'jl@imagine.com');
		$fifth->add_grade(70);
		$fifth->add_grade(70);
		$fifth->add_grade(70);
		$students['j999'] = $fifth;
		
		// add sixth student
		$sixth = new Student();
		$sixth->surname = "The Alien";
		$sixth->firstName = "Ziltoid";
		$sixth->add_email('work', 'ziltoid@ziltoid.com');
		$sixth->add_grade(10);
		$sixth->add_grade(20);
		$sixth->add_grade(30);
		$students['z999'] = $sixth;
		
		ksort($students);
		
		echo "<h1>Students</h1><div style='margin: 40px'>";
		
		foreach( $students as $student )
		{
			echo $student->toString();
		}
		
		echo "</div>";
		
		?>
	</body>
</html>