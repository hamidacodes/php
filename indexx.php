<?php

// class Greetable {
//     public function greet() {
//         return "Hello!";
//     }
// }

// $object =new class extends Greetable {
//     public function greet() {
//         return parent::greet() ;
//     }
// };


// echo $object->greet();



// cloning and copy

// &

// class Hamida {
//     public $name='Merhaba';
// }

// $turkan = new Hamida();

// echo $turkan->name;


// $object1=new stdClass();
// $object1->name="John";


// $object2=$object1;
// $object2->name="Doe";

// echo $object1->name;
// echo $object2->name;

// $object1=new stdClass();
//  $object1->name="John";


// $object2=clone $object1;
// $object2->name="Doe";

// echo $object1->name;
// echo $object2->name;



class Product {
    public $name;


    public function __clone() {
        $this->name="Cloned:" .$this->name;
    }
}

$product1=new Product();
$product1->name="Laptop";

$product2=clone $product1;

echo $product1->name ."<br>";
echo $product2->name ."<br>";
