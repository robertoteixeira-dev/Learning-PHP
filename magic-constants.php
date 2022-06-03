<?php

namespace MagicConstants;

/*
This constants are already declared by PHP

__DIR__ returns the current working directory

__FILE__ returns the current working diretory and file name

__FUNCTION__ returns the current function name

__CLASS__ returns the current class and namespace if defined

__LINE__ returns the current line

__METHOD__ returns the current method name

__NAMESPACE__ returns the current namespace

*/

echo __DIR__ . '</br>';

echo __FILE__ . '</br>';

function superFunction(){
    echo __FUNCTION__ . '</br>';
}

superFunction();

class SuperClass {
    public function echo_classname()
    {
        echo __CLASS__ . '</br>';
        echo __METHOD__ . '</br>';
    }

  
}

$obj = new SuperClass;
$obj->echo_classname();


echo __LINE__ . '</br>';
echo __NAMESPACE__ . '</br>';

?>