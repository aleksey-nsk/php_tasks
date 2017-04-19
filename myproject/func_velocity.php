<?php
	// ========== Задача #1 ==========	
	
	// Функция для расчёта скорости:	
	function velocity()
	{
		// var_dump($_POST);

		$isFormSubmit_1 = isset( $_POST['check_1'] );
		if($isFormSubmit_1 === true)
		{
			echo 'Кнопка "Рассчитать скорость" нажата <br>';	
			
			$s = $_POST['s']; // введенная с клавиатуры строка (путь s) 
			$t = $_POST['t']; // введенная с клавиатуры строка (время t)
			echo "Вы ввели s = $s <br>";
			echo "Вы ввели t = $t <br>";

			if( is_numeric($s) && is_numeric($t) ) // проверим явл-ся ли строки числами  
			{
				// echo "$s и $t являются целыми или десятичными числами <br>";
				
				// echo gettype($s) . '<br>'; // string
				settype($s, "double"); // строка $s теперь double 
				// echo gettype($s) . '<br>'; // double

				// echo gettype($t) . '<br>'; // string
				settype($t, "double"); // строка $t теперь double 
				// echo gettype($t) . '<br>'; // double

				if ( $s >= 0.0 && $t > 0.0 )
				{	
					echo "Путь $s >= 0.0, время $t > 0.0 <br>";	

					// Скорость в километрах в час:
					$v_km_h = $s / $t; 	

					// Скорость в метрах в секунду:
					$v_m_s = $v_km_h * 10.0 / 36.0;

					// Ф-ция number_format() форматируем вывод числа:
					echo 'Скорость составляет ';
					echo number_format($v_km_h, 2, '.', ' '); 
					echo ' км/ч = ';
					echo number_format($v_m_s, 2, '.', ' ');
					echo ' м/с';
				}
				else
				{
					echo 'Путь s должен быть больше либо равен нулю!';
					echo ' А время t должно быть строго больше нуля!';
				}
			}
			else
			{
				echo 'Путь s и время t должны оба быть целыми или десятичными числами!';
			} 
		}						
		else
		{
			echo 'Кнопка "Рассчитать скорость" не нажата';
		}
	}	
?>
