<?php

class Greetable {
    public function greet() {
        return "Hello!";
    }
}

$object =new class extends Greetable {
    public function greet() {
        return "Hello,World" ;
    }
};


echo $object->greet();

