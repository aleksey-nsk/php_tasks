<?php
	// ========== Задача #1 ==========	
	// Функция выводит на экран 
	// массив из нулей и единичек:	
	function array_01()
	{
		// var_dump($_POST);

		$isFormSubmit_1 = isset( $_POST['check_1'] );
		if($isFormSubmit_1 === true)
		{
			echo 'Кнопка "Вывести массив $n" нажата' . '<br>';	

			$symbols = $_POST['number_1']; // введенная с клавиатуры строка 
			// echo $symbols . '<br>';
			if( ctype_digit($symbols) ) // проверим, состоит ли строка только из цифр 
			{				
				settype($symbols, "integer"); // $symbols is now integer
				if( $symbols >= 0 && $symbols <= 100 )
				{					
					echo 'Длина массива $n = ' . $symbols . '<br>'; // длина массива

					// Заполняем массив:
					for($i = 0; $i < $symbols; $i++)
					{				
						if($i % 2 == 0)
						{ 
							$array01[$i] = 0;
						}
						else 
						{
							$array01[$i] = 1;
						}
					}
										
					// Выводим массив на экран:
					for($i = 0; $i < $symbols; $i++)
					{
						echo $array01[$i] . ' '; 	
					}	
				}
				else
				{
					echo 'Длина массива $n должна быть целым числом от 0 до 100!';
				}
			}
			else
			{
				echo 'Длина массива $n должна быть целым числом от 0 до 100!';
			}
		}						
		else
		{
			echo 'Кнопка "Вывести массив $n" не нажата';
		}
	}	
?>
