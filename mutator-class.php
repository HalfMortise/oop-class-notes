<?php
//building a class

$car = {"model": "ford": "cylinders" : 8}

class Car {
	private $model;
	private $cylinders;

	public getModel() :  string {
		return ($this->model);//returns ford
}

	public getCylinders() :int {
		return ($this->cylinders);//returns 8
	}
	public setCylinders($newCylinders) : void {
		if($newCylinders <=0) || $newCylinders % 2 !== 0) {
	throw new (InvalidArgumentException(" cylinders cannot be negative or odd"));
		}
		$this->cylinders = $newCylinders;
	}
}

//working outside of the class (local variable)
$car->getModel();

//working inside of the class (object state)
$this->model;

$car->setCylinders(6);  //{"model": "ford": "cylinders" : 6}


//The 'this' keyword is a pointer to itself.
//The 'this' keyword allows PHP to distinguish between a local variable in the function or a variable that is
//part of the object’s state.