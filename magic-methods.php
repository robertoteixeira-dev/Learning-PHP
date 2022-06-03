<?php

/*
Mágic methods are special methods which override PHP's
default's action when certain actions are performed on
an object

# __get()
    It gets called whenever you try to access a non-existing
    or inaccessible property on an object

# __set()
    It gets called whenever ou try to assign a value to an 
    underfined or inaccessible property

    The first argument is the name and the second is the value 

# __isset()
    It gets called when you use isset or empty functions 
    on undefined or inaccessible properties
    
    It will return the boolean value

# __unset()
    It gets called when you use the unset n undefined or
    inaccessible properties

# __call()
    If we try to call a methods that dont exist


# __callStatic


# __toString()
    When you try to interact with an object as a string

# __invoke()
    It gets called when you try to call the object directly

# __debugInfo()
    

*/

class Pessoa {

    public function __isset(string $name): bool
    {
        return array_key_exist($name, $this->data);
    }

    public function __unset(string $name): void 
    {
        unset($this->data[$name]);
    }

    public function __call(string $name, array $arguments)
    {
        var_dump($name, $arguments);
    }

    public static function __callStatic(string $name, array $arguments)
    {
        var_dump('static', $name, $arguments);
    }

    public function __toString(): string
    {
        return 'Hello';
    }



}









?>