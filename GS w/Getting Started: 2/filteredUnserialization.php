<!-- *security issues of unserialization (PHP Object Injection) -->
<!-- *How filtered unserialization can solve the security problem -->
<!-- serialize objects to reuse later, this returns the value in a string -->


<?php
class Car {
    public function setColor($color) {
        $this -> color = $color;
    }
}

class Motorcycle {
    public function setBrand($brand) {
        $this -> brand = $brand;
    }
}

$car = new Car();
$car->setColor('black');
$motorcycle = new Motorcycle();
$motorcycle->setBrand('Suzuki');

$serialized = serialize([$car, $motorcycle]);
var_dump($serialized);
// This allows a hidden class
var_dump(unserialize($serialized, ['allowed_class' => ['Car']]));