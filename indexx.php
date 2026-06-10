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


$object1=new stdClass();
$object1->name="John";


$object2=$object1;
$object2->name="Doe";

echo $object1->name;
echo $object2->name;