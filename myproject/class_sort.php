<?php

// ========== Задача #4 ==========	

// Напишите класс, который сортирует числа внутри массива 
// используя функцию sort()
// Например:
// Входящий массив: array(11, -2, 4, 35, 0, 8, -9)
// Вывод: Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )
 
class Sort 
{	
	public static function sortArray($array)
	{
		sort($array);
		return $array;
	}
}
