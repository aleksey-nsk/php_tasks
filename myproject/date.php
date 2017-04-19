<?php 
	include("header.php"); 	
?> 

<div id="content"> 
	<div id="content_header"> <b> Даты </b> </div> 

	<!-- ========== Задача #1 ========== --> 	
	<b> Задача #1 </b> <br>
	Выведите текущее время в формате timestamp <br> <br>

	<?php
		// int time(void) - возвращает текущую метку времени Unix
		// Возвращает количество секунд, прошедших с начала Эпохи Unix 
		// (The Unix Epoch, 1 января 1970 00:00:00 GMT) до текущего времени
		echo 'С начала Эпохи Unix прошло ' . time() . ' секунд' . '<br>';

		// date — форматирует вывод системной даты/времени
		// string date( string $format [, int $timestamp = time() ] ) 
		echo 'Текущее время: '. date('Y-m-d H:i:s');
	?>

	<!-- ========== Задача #2 ========== -->
	<br> <br>
	<b> Задача #2 </b> <br>
	Выведите 1 марта 2025 года в формате timestamp <br> <br> 

	<?php
		// mktime — возвращает метку времени Unix для заданной даты
		// int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") 
		// [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") 
		// [, int $is_dst = -1 ]]]]]]] )

		echo date( 'Y-m-d H:i:s', mktime(0, 0, 0, 3, 1, 2025) );  
	?>	

	<!-- ========== Задача #3 ========== -->
	<br> <br>
	<b> Задача #3 </b> <br>
	Выведите 31 Декабря текущего года в формате timestamp. Скрипт должен 
	работать независимо от года, в котором он запущен <br> <br>

	<?php 		
		// Определим текущий год 
		$current_year = date('Y'); 

		// Выведем 31 Декабря текущего года
		echo date( 'Y-m-d H:i:s', mktime(0, 0, 0, 12, 31, $current_year) ); 
	?>

	<!-- ========== Задача #4 ========== -->
	<br> <br>
	<b> Задача #4 </b> <br>
	Найдите количество секунд, 
	прошедших с 13:12:59 15-го марта 2000 года 
	до настоящего момента времени <br> <br>

	<?php 		
		$past_date = mktime(13, 12, 59, 3, 15, 2000);
		// echo $past_date . '<br>';
		
		$current_date = time();
		// echo $current_date . '<br>';
		
		$extract = $current_date - $past_date;
		// echo gettype($extract) . '<br>'; // integer
		echo 'Количество секунд = ';
		// echo $extract . '<br>'; // неформатированный вывод
		echo number_format($extract, 0, ' ', ' '); // форматированный вывод 
	?>
</div>	

<?php
	include("bottom.php");
?> 