<?php

// ========== Задача #3 ==========	

// Напишите PHP класс, который считает факториал числа

class Factorial 
{	
	public function calculate($n)
	{
		if ($n < 0)
		{
			return 'Error: number for factorial should positive or 0';
		}		

		$factorial = 1;		
		for ($i = $n; $i > 1;  $i--) 
		{
			$factorial = $factorial * $i;
		}	
			
		return  $factorial;		
	}
}
