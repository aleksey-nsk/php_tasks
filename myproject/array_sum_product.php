<?php 

// Функция вычисляет сумму элементов массива
function my_sum($array)
{
	$sum = 0;
	foreach ($array as $element)
	{
		$sum = $sum + $element;
	}
	return $sum;
}

// Функция вычисляет произведение элементов массива
function my_product($array)
{
	$product = 1;
	foreach ($array as $element) 
	{
		$product = $product * $element;
	}
	return $product;
}
