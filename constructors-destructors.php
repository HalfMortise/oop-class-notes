<?php
//When an object is instantiated, the constructor - a method which sets the object's state - is executed
//Conversely, when the object goes out of scope, the destructor is executed

$car = {"model": "ford": "cylinders" : 8}

class Car {
	private $model;
	private $cylinders;
//Place constructor here, per style guide, in alphabetical order (primary key, foreign key, then alphabetical order)
	public function __construct(int $newCylinders, string $newModel) {
		$this->setCylinders($newCylinders);
		$this->setModel($newModel);
	}

public getCylinders() :int {
return ($this->cylinders);//returns 8

public getModel() :  string {
return ($this->model);//returns ford
}

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

//calling the constructor
$chevy = new Car(4,"Chevy"); //$chevy = {cylinders: 4, "Chevy")

//PHP function that uses the Car classes accessor with no fear of Fatal Errors
public function mapModel(Car $car) {
	return $car->model;
}

//The 'this' keyword is a pointer to itself.
//The 'this' keyword allows PHP to distinguish between a local variable in the function or a variable that is
//part of the object’s state.