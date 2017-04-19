<?php 
	include("header.php"); 	
?>

<div id="content"> 
	<div id="content_header"> <b> CSV loader </b> </div> 
	<b> Задача </b> <br>
	Выбрать CSV-файл и вывести его на экран
	в виде таблицы <br> <br>		

	<?php 
		// 1. CSV-handler
		// 2. Output table in html
		// 3. Form with file input

		// var_dump($_POST);
		// var_dump($_FILES);  

		$isFormSubmit = isset($_POST['csv_file_upload']);
		if($isFormSubmit === true) 
		{
			$csvFile = ( isset ( $_FILES['csv_file']['tmp_name'] ) )
				? $_FILES['csv_file']['tmp_name']
				: false; 	

			// $csvFile = __DIR__ . '/csv/users.csv';
			// $csvFile = __DIR__ . '/csv/users_empty.csv';
			// $csvFile = __DIR__ . '/csv/empty.csv';

			// echo $csvFile . "<br>";

			if( !file_exists($csvFile) ) 
			{
				echo 'File $csvFile not found';
				die(); // прерывание скрипта 
				// exit(1); // тут можно передавать код выхода 
			}

			// Смотри документацию: 
			// http://php.net/manual/ru/function.fgets.php
			// Пример #1. Построчное чтение файла 
			$handle = fopen($csvFile, "r+");
			if($handle !== false) 
			{
				$rows = []; // пустой массив 

				// fgets — читает строку из файла: 
				while( ($buffer = fgets($handle, 4096) ) !== false ) 
				{ 			
					// echo $buffer . "<br>";
					// var_dump( explode(";", $buffer) ); 
					$rows[] = explode(";", $buffer);			
				}

				// Закрываем указатель на файл чтобы освободить память:
				fclose($handle);  

				if(count($rows) == 0) 
				{
					echo 'File $csvFile is empty';
					die();
				}

				$columns = $rows[0];
				$columnsCount = count($columns);
				// echo 'Переменная $columnsCount = ' . $columnsCount . "<br>";
				$users = array_slice($rows, 1);
				$usersCount = count($users);
				// echo 'Переменная $usersCount = ' . $usersCount . "<br>";

				// var_dump($rows);
			}	
		}		
	?>
	
	<form method="POST" name="csv_file_upload" enctype="multipart/form-data">		
		<!-- Скрытое поле, по которому будем определять
		 	 был сабмит формы или не было: -->
		<input type="hidden" name="csv_file_upload" value="y"> 
		
		Csv file: <input type="file" name="csv_file"> <br>
		<input type="submit" name="csv_file_submit" value="Upload">
	</form>

	<br>

	<?php if($isFormSubmit === true): ?>
		<table border="1" cellpadding="2" cellspacing="0">
			<thead>
				<tr>			
				<?php foreach($columns as $name): ?> <!-- это "php-вкрапления" -->
					<th> <?php echo $name; ?> </th>
				<?php endforeach; ?>				
				</tr>
			</thead>
			<tbody>
				<?php if($usersCount > 0): ?>
					<?php foreach($users as $user): ?>
					<tr>
						<?php foreach($user as $property): ?>
						<td> <?php echo $property; ?> </td>		
						<?php endforeach; ?>		
					</tr>
					<?php endforeach; ?>
				<?php else: ?>
					<tr>
						<td colspan="<?php echo $columnsCount; ?>"> Users not found </td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
	<?php endif; ?>

</div>

<?php
	include("bottom.php");
?>