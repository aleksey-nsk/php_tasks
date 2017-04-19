<?php
	// Подключим скрипты с необходимыми функциями:
	include("class_initialize.php");
	include("class_greeting.php");
	include("class_factorial.php");
	include("class_sort.php"); 
	include("class_calculator.php");
?>

<?php 
	include("header.php"); 	
?> 

<div id="content"> 
	<div id="content_header"> <b> Классы </b> </div> 
	
	<!-- ========== Задача #1 ========== --> 
	<b> Задача #1 </b> <br>
	Напишите простой PHP класс, который отображает следующую строку: 
	'MyClass class has initialized !' <br> <br>

	<?php
		$obj = new MyClass();
	?>
	
	<!-- ========== Задача #2 ========== -->
	<br> <br>
	<b> Задача #2 </b> <br>
	Напишите простой PHP класс, который отображает 
 	приветственное сообщение: "Hello All, I am Scott", 
	где Scott - значение аргумента метода внутри класса <br> <br> 

	<?php
		$name = 'sCoTt';
		$greeting = new Greeting();
		$greeting->hello($name);
	?>

	<!-- ========== Задача #3 ========== -->
	<br> <br>
	<b> Задача #3 </b> <br>
	Напишите PHP класс, который считает факториал числа <br> <br> 

	<?php
		$obj = new Factorial(); // достаточно создать 1 объект
		for ($i = -1; $i <= 5 ; $i ++)
		{
			echo "$i! = ";
			echo $obj->calculate($i);
			echo '<br>';
		}
	?>

	<!-- ========== Задача #4 ========== -->
	<br>
	<b> Задача #4 </b> <br>
	Напишите класс, который сортирует числа внутри массива 
	используя функцию sort() <br>
	Например: <br>
	Входящий массив: $array = [11, -2, 4, 35, 0, 8, -9] <br>
	Вывод: Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 ) 
	<br> <br>

	<?php
		$array1 = [11, -2, 4, 35, 0, 8, -9];
		$array2 = [-100000, 11, -2, 0,8, 9, -4, 0];

		$sortedArray1 = Sort::sortArray($array1);
		$sortedArray2 = Sort::sortArray($array2);

		echo '$array1 = [11, -2, 4, 35, 0, 8, -9]' . '<br>';
		echo '$sortedArray1 = ';
		print_r($sortedArray1);
		echo '<br><br>';

		echo '$array2 = [-100000, 11, -2, 0,8, 9, -4, 0]' . '<br>';
		echo '$sortedArray2 = ';
		print_r($sortedArray2);
	?>

	<!-- ========== Задача #5 ========== -->
	<br> <br>
	<b> Задача #5 </b> <br>
	Вычислите разницу между двумя датами, используя PHP ООП подход <br>
	Пример: <br>
	Даты: 1981-11-03, 2013-09-04 <br> 
	Ожидаемый результат: Difference: 31 years, 10 months, 1 days <br> <br> 

	<?php
		$datetime1 = new DateTime('1981-11-03');
		$datetime2 = new DateTime('2013-09-04');
		
		$interval = $datetime1->diff($datetime2); 
		echo $interval->format('%y years, %m months, %d days');
	?>

	<!-- ========== Задача #6 ========== -->
	<br> <br>
	<b> Задача #6 </b> <br>
	Напишите PHP класс калькулятор, который принимает два значения 
	как аргументы и умеет складывать, вычитать, умножать и делить 
	эти значения при вызове соответствующих методов <br>
	Пример: <br>
	$mycalc = new MyCalculator(12, 6); <br> 
	echo $mycalc -> add(); // Displays 18 <br> 
	echo $mycalc -> multiply(); // Displays 72 <br> <br> 

	<?php
		$mycalc = new MyCalculator(12, 6); 
		echo '$mycalc = new MyCalculator(12, 6);' . '<br>';

		echo 'add: ';
		echo $mycalc->add(); // Displays 18 
		echo '<br>';

		echo 'extract: ';
		echo $mycalc->extract(); // Displays 6
		echo '<br>';

		echo 'multiply: ';
		echo $mycalc->multiply(); // Displays 72
		echo '<br>';

		echo 'divide: ';
		echo $mycalc->divide(); // Displays 2
	?>
</div>	

<?php
	include("bottom.php");
?> 