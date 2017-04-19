<?php
	// Подключим скрипты с необходимыми функциями:
	include("func_velocity.php");
	include("func_factorial.php");
?>

<?php 
	include("header.php"); 	
?> 

<div id="content"> 
	<div id="content_header"> <b> Функции </b> </div> 

	<!-- ========== Задача #1 ========== --> 
	<b> Задача #1 </b> <br>
	Рассчитать скорость движения машины и вывести её в удобочитаемом виде. 
	Осуществить возможность вывода в км/ч, м/c. 
	Исходные данные: пройденный путь s, время движения t.
	Представить решение задачи с помощью одной функции <br> <br>

	<form method="POST" name="task_1" action="functions.php">
		<!-- Скрытое поле, по которому будем определять
		 	 был сабмит формы или не было: -->
		<input type="hidden" name="check_1" value="y_1">

		Введите путь s в километрах: 
		<input type="text" name="s" size="4"> <br> 

		Введите время t в часах:	
		<input type="text" name="t" size="10"> <br>

		<input type="submit" name="send_1" value='Рассчитать скорость'> <br> <br>
	</form>

	<?php
		velocity();
	?>

	<!-- ========== Задача #2 ========== --> 
	<br> <br>
	<b> Задача #2 </b> <br>
	Разработать функцию вычисления факториала заданного числа (n!) <br>  
	Исходные данные, передаваемые в функцию: n - число, факториал которого вычисляется.
	На выходе получить результат в виде факториала числа <br> <br>

	<form method="POST" name="task_2" action="functions.php">
		<!-- Скрытое поле, по которому будем определять
		 	 был сабмит формы или не было: -->
		<input type="hidden" name="check_2" value="y_2">

		Введите число n, для которого мы будем вычислять факториал.
		Число n должно быть целым, от 0 до 100 <br> 
		n = <input type="text" name="n" size="6">

		<input type="submit" name="send_2" value='Вычислить факториал'> <br> <br>
	</form>
	
	<?php
		factorial();
	?>		
</div>	

<?php
	include("bottom.php");
?> 