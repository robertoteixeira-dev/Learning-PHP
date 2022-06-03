<?php

/*
MÉTODOS MÁGICOS 

# Clone
# Construct
# Invoke
# Tostring
# Get
# Set

*/

/*
### GET & SET ###


class Pessoa {
    private $nome;

    //Usamos o set para passar o valor
    public function __set($nome, $valor){
        $this->nome = $valor;
    }

    //Para poder dar echo em pessoa->nome;
    public function __get($nome){
        return $this->nome;
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Roberto";

var_dump($pessoa);

echo $pessoa->nome;

*/

#SE FOSSE UM ARRAY
class Pessoa {
    private $dados = array();

    //Usamos o set para passar o valor
    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }

    //Para poder dar echo em pessoa->nome;
    public function __get($nome){
        return $this->dados[$nome];
    }

    public function __tostring(){
        return "Tetei imprimir o objeto";
    }

    public function __invoke(){
        return "Objeto como função";
    }


}

$pessoa = new Pessoa();
$pessoa->nome = "Roberto";

var_dump($pessoa);

echo $pessoa->nome;

//Posso passar outros parametros
$pessoa->idade = 24;
echo $pessoa->idade;


### TOSTRING ###
/*
Se eu tentar dar echo em $pessoa, 
vai dar erro. Por isso preciso do 
metodo tostring
*/ 
echo $pessoa;


### INVOKE ###

//É chamado quando tentamos utilizar o objeto como função












?>