<?php
	// Подключим скрипты с необходимыми функциями:
	include("array_01.php");
	include("array_square.php");
	include("array_sum_product.php");
?>

<?php 
	include("header.php"); 	
?> 

<div id="content"> 
	<div id="content_header"> <b> Массивы </b> </div> 

	<!-- ========== Задача #1 ========== --> 
	<b> Задача #1 </b> <br>
	Заполнить массив длины $n нулями и единицами, при этом данные значения
	чередуются, начиная с нуля <br> <br>

	<form method="POST" name="task_1" action="arrays.php">
		<!-- Скрытое поле, по которому будем определять
		 	 был сабмит формы или не было: -->
		<input type="hidden" name="check_1" value="y_1">

		В качестве размера массива $n введите целое число от 0 до 100 <br> 
		$n = 
		<input type="text" name="number_1"> 		
		<input type="submit" name="send_1" value='Вывести массив $n'> <br> <br>
	</form>

	<?php 
		array_01(); 		
	?>
		
	<!-- ========== Задача #2 ========== -->
	<br> <br>
	<b> Задача #2 </b> <br>
	Создать массив из $m чисел, каждый элемент которого 
	равен квадрату своего номера <br> <br>

	<form method="POST" name="task_2" action="arrays.php">
		<!-- Скрытое поле, по которому будем определять
		 	 был сабмит формы или не было: -->
		<input type="hidden" name="check_2" value="y_2">

		В качестве размера массива $m введите целое число от 0 до 100 <br> 
		$m = 
		<input type="text" name="number_2"> 		
		<input type="submit" name="send_2" value="Вывести массив $m"> <br> <br>
	</form>

	<?php 
		array_square();
	?>	

	<!-- ========== Задача #3 ========== -->
	<br> <br>
	<b> Задача #3 </b> <br>
	Найдите сумму и произведение элементов массива. Реализовать двумя способами: 
	с помощью стандартных функций и без <br> <br> 

	<?php
		$arr = [10, -20, 4, 5.7, 2, 1, 1, 0.8];
		echo '$arr = [10, -20, 4, 5.7, 2, 1, 1, 0.8];' . '<br> <br>';

		// array_sum вычисляет сумму значений массива 		
		echo 'Sum = ' . array_sum($arr) . '<br>';

		// array_product вычисляет произведение значений массива
		echo 'Product = ' . array_product($arr) . '<br> <br>';

		// Пользовательские функции
		echo 'My Sum = ' . my_sum($arr) . '<br>';
		echo 'My Product = ' . my_product($arr) . '<br>';
	?>
</div>	

<?php
	include("bottom.php");
?>
