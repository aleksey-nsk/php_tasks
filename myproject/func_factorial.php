<?php
	// ========== Задача #2 ==========	
	
	// Функция для расчёта факториала:	
	function factorial()
	{
		// var_dump($_POST);
		
		$isFormSubmit_2 = isset( $_POST['check_2'] );
		if($isFormSubmit_2 === true)
		{
			echo 'Кнопка "Вычислить факториал" нажата <br>';	
			
			$n = $_POST['n']; // введенная с клавиатуры строка (число n) 			
			echo "Вы ввели n = $n <br>";
			
			if( ctype_digit($n) ) // проверим, состоит ли строка только из цифр 
			{			
				// echo "$n является целым числом <br>";
								
				// echo gettype($n) . '<br>'; // string
				settype($n, "integer"); // строка $n теперь integer 
				// echo gettype($n) . '<br>'; // integer

				if ($n <= 100)
				{	
					// echo "Число $n <= 100 <br>";	

					$factorial = 1;
					for ($i = $n; $i > 1;  $i--) 
					{
						$factorial = $factorial * $i;
					}
					echo "$n! = $factorial";					
				}
				else
				{
					echo 'Ошибка! Число n должно быть <= 100';					
				}
			}
			else
			{
				echo 'n должно быть целым неотрицательным числом!';
			} 
		}						
		else
		{
			echo 'Кнопка "Вычислить факториал" не нажата';
		}
	}	
?>
