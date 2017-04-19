<?php	
	// ========== Задача #2 ==========	
	// Функция выводит на экран массив каждый элемент 
	// которого равен квадрату своего номера:   	
	function array_square()
	{
		// var_dump($_POST);

		$isFormSubmit_2 = isset( $_POST['check_2'] );
		if($isFormSubmit_2 === true)
		{
			echo 'Кнопка "Вывести массив $m" нажата' . '<br>';	

			$symbols_2 = $_POST['number_2']; // введенная с клавиатуры строка 
			// echo $symbols_2 . '<br>';
			if( ctype_digit($symbols_2) ) // проверим, состоит ли строка только из цифр 
			{				
				settype($symbols_2, "integer"); // $symbols_2 is now integer
				if( $symbols_2 >= 0 && $symbols_2 <= 100 )
				{					
					echo 'Длина массива $m = ' . $symbols_2 . '<br>'; // длина массива

					// Заполняем массив:
					for($i = 0; $i < $symbols_2; $i++)
					{				
						$array02[$i] = $i * $i;
					}
						
					// Выводим массив на экран:
					for($i = 0; $i < $symbols_2; $i++)
					{
						echo $array02[$i] . ' '; 		
					}
				}
				else
				{
					echo 'Длина массива $m должна быть целым числом от 0 до 100!';
				} 
			}
			else
			{
				echo 'Длина массива $m должна быть целым числом от 0 до 100!';
			} 
		}						
		else
		{
			echo 'Кнопка "Вывести массив $m" не нажата';
		} 

	}
?> 