<?php
	
class Student
{
	
	function __construct()
	{
		$this->surname = '';
		$this->firstName = '';
		$this->emails = array();
		$this->grades = array();
	}
	
	function add_email($which, $address)
	{
		$this->emails[$which] = $address;
	}
	
	function add_grade($grade)
	{
		$this->grades[] = $grade;
	}
	
	function average()
	{
		$total = 0;
		foreach($this->grades as $value)
		{
			$total += $value;
		}
		
		return $total / count($this->grades);
	}
	
	function toString()
	{
		$result = '<b>' . $this->firstName . ' ' . $this->surname . "</b>";
		$result .= ' (';
		if($this->average() == 100)
		{
			$result .= "<span style='color: blue'>";
		}
		elseif($this->average() < 50)
		{
			$result .= "<span style='color: red'>";
		}
		else
		{
			$result .= "<span style='color: green'>";
		}
		
		$result .= $this->average() . '</span>' . ")\n";
		
		foreach( $this->emails as $which=>$what)
		{
			$result .= "    " . $which . ":\t" . $what . "\n";
		}
		
		$result .= "\n";
		return '<pre>' . $result . '</pre>';
	}
};
	
?>