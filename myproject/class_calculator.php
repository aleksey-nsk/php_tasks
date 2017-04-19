<?php

// ========== Задача #6 ==========	

// Напишите PHP класс калькулятор, который принимает два значения 
// как аргументы и умеет складывать, вычитать, умножать и делить 
// эти значения при вызове соответствующих методов 
// Пример: 
// $mycalc = new MyCalculator(12, 6); 
// echo $mycalc -> add(); // Displays 18 
// echo $mycalc -> multiply(); // Displays 72 

// Эту задачу лучше решать через статичные функции, 
// но тут уже в условии указано как надо сделать  

class MyCalculator 
{
	private $x;
	private $y;
	
	public function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;		
	}
	
	public function add()
	{
		return $this->x + $this->y;
	}
	
	public function extract()
	{
		return $this->x - $this->y;
	}
	
	public function multiply()
	{
		return $this->x * $this->y;
	}
	
	public function divide()
	{
		return $this->x / $this->y;
	}	
}