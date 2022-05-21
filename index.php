<?php

const CONSTANT = 18;
$name = "Lucas";
$age = 33;
$ok = false;
$price = 12.0;

echo "hello, I am called ".$name." and I am ".CONSTANT." years old!<br/>";

$fruits = Array("banana", "apple", "cherry", 2, true);

//print($price."<br/>");

print_r($fruits);

$age = 12;

if ($age >= 18) {
    echo "<br/><h2>Congratz! You can drink!</h2><br/>";
} else {
    echo "<br/><h2>Hold yourself!</h2><br/>";
}

$age = 24;

switch($age) {
    case $age < 18: 
        echo "ok";
    break;

    case $age > 20: 
        echo "vaco!";
        break;

    default: 
        echo "Bazinga!";
}

echo "<br/>fruit: ".$fruits[1];

for($i=0; $i < count($fruits); $i++){
    echo "<br/>fruit: ".$fruits[$i];
}

echo "<br/><br/>";

foreach($fruits as $fruit){
    echo "<br/>fruit: ".$fruit;
}

echo "<br/><br/>";

$j = 0;

while($j < 10) {
    echo $j." ";
    $j++;
}

echo "<br/><br/>";

$j = 0;

do {
    echo $j." ";
    $j++;
} while($j < 10);

$person = Array("name" => "Lucas", "age" => 33);

echo "<br/><br/>";

echo "name: ".$person["name"]." age: ".$person["age"];

function sum($x, $y) {
    return $x + $y;
}

echo "<br/><br/>";

echo sum(5, 10);

echo "<br/><br/>";

echo $_GET["name"];

class Animal {
    public $name;
    public $age = 100;
    public static $paws = 2;

    function __construct($name) {
        $this->$name = $name;
    }

    function quack(){
        echo "<h4>QUAAAAAACKK!</h4>";
    }

    function getName(){
        return $this.$name;
    }
}

$pato = new Animal("Quack!");

$pato->quack();

// Se tem um erro, ele para no erro!!!! (nao vai executar nada depois do erro!)

echo "<br/><br/>";

echo $pato->age;

echo "<br/><br/>";

echo Animal::$paws;




