<?php

// Factory Pattern (Паттер Фабрика)
//
// Фабрика на выходе отдает объект нужного класса.
// А чтобы определить объект какого класса нужен, этим как
// раз и занимается фабрика. 
//
// Т.е. в зависимости от параметра фабрика создает
// объект нужного нам класса (грубо говоря).
// Фабрика понимает объект какого класса надо создать на основе
// переданных ей параметров.

$obj1 = new Auto('Nissan', 'Sunny');
$obj2 = new Auto('Ford', 'Focus');
$obj3 = new ToyotaAuto('Toyota', 'Ist');
$obj4 = AutoFactory::create('Toyota', 'Lexus', 'black');
$obj5 = AutoFactory::create('Nissan', 'Sunny', 'pink');

echo $obj3->getMakeAndModel();
echo $obj4->getMakeAndModel();
echo $obj5->getMakeAndModel();

var_dump($obj1);
var_dump($obj2);
var_dump($obj3);
var_dump($obj4);
var_dump($obj5);

class Auto
{
	private $make; // производитель
	private $model; // модель 

	public function __construct ($make, $model)
	{
		$this->make = $make;
		$this->model = $model;
	}

	public function getMakeAndModel()
	{
		return $this->make . ' - ' . $this->model . '<br>';
	}
}

class ToyotaAuto extends Auto
{
	public $color;

	public function __construct($make, $model, $color = 'white')
	{
		parent::__construct($make, $model);
		$this->color = $color;
	}
}

class AutoFactory
{
	public static function create($make, $model, $color = 'white')
	{
		if ($make == 'Toyota')
		{
			return new ToyotaAuto($make, $model, $color);
		}
		return new Auto($make, $model);
	}
}