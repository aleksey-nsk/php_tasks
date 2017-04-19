<?php

// ========== Задача #2 ==========	

// Напишите простой PHP класс, который отображает 
// приветственное сообщение: "Hello All, I am Scott", 
// где Scott - значение аргумента метода внутри класса

class Greeting 
{
	public function hello($name)
	{
		// $name = ucfirst($name);
		$name = ucfirst(strtolower($name)); 		 	
		echo "Hello All, I am $name";
	}	
}
