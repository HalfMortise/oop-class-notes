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
}

//working outside of the class (local variable)
$car->getModel();

//working inside of the class (object state)
$this->model;




//The 'this' keyword is a pointer to itself.
//The 'this' keyword allows PHP to distinguish between a local variable in the function or a variable that is
//part of the object’s state.