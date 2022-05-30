<?php 
/*
TIPOS DE DADOS

- String: Palavras
- Integer: Qualquer número inteiro
- Float: Números decimais
- Boolean: True/False
- Array: Matriz de dados
- Object: Objetos que contem atributos dentro dele
- Null: Nulo

*/

//STRING
$exemplo1 = "Roberto"; //String

//INTEGER
$exemplo2 = 24;
$exemplo3 = -2; // Mesmo sendo negativo ainda é inteiro

//Para ver o tipo e valor da variável
var_dump($exemplo2);

//FLOAT
$exemplo4 = 3.5;
var_dump($exemplo4);

//BOOLEAN
$learning = true;
echo $learning;
var_dump($learning);

//ARRAY (MATRIZES)

$filmes =  array("Homen Aranha","Doutor Estranho","Frozen");

var_dump($filmes);

echo $filmes[2];

//OBJETOS

//No JS tudo são objetos, já aqui no PHP os objetos precisam ser criados através de classes instanciados (OOP)

class filme {
    public $nome;
    public $categoria;

    public function __construct($nome,$categoria){
        $this->nome = $nome;
        $this->categoria = $categoria;
    }
    public function mensagem(){
        return "O filme é $this->nome e a categoria é $this->categoria";
    }
}
//Agora eu posso usar minha função
$filme = new filme("Harry Potter", "Fantasia");
echo $filme->mensagem();
echo $filme->categoria;

//NULL 

$x = null;
var_dump($x);

?>





