<?php

class Car {
    //Contains properties and methods
    private $name;
    private $brand;
    public $objectt = "Carrrr";              //As this varible value doesn't need to be assigned differently for each object declare it here 

    //Constructor
    public function __construct($name,$brand="Jaguar"){
        $this->name = $name;
        $this->brand = $brand;
    }

    //Methods
    public function PutInfo(){
        echo "Car Name:$this->name and Brand Name:$this->brand";
    }

    //Getter
    public function getdata()
    {
        return $this->name;
    }

    //Setter
    public function putdata($name)
    {
       return $this->name="Benzzzzz";
    }
}

$car1 = new Car("Audi","Jaguar");

$car2 = new Car("Ford");

echo "$car2->objectt"; 

$car2->PutInfo();

$name1= $car1->getdata();
echo $name1;

$name2= $car1->putdata("FORDDD");
echo $name2;


