<?php

/*
- Its a code style related to group f classes
- It helps to create code more clean and efficient
- "dont repeat yourself"

- principal vantagem: facil manutenção do código

- Você reune suas funções em um lugar só

OBJETOS
- São como variaveis que podem conter dentro delas várias
propriedades e funções. Essas funções são chamadas de métodos

- Classes são como fábricas de objetos. Determinam um "molde"
ou um "padrão" para criar um objeto. A partir dessa classe podemos
criar vários objetos

- Quando um objeto é gerado dizemos que ele é uma instancia de uma classe.
Ou seja, como um "filho" 

EXEMPLO
- Objeto: carro
- Propriedades: ano, cor, modelo, marca
- Métodos: funções dele (acelerar, freiar, dar partida)

- Classe é a fábrica de carro, que faz um padrão geral 
desses carros, e a partir disse, podemos fazer
varios carros mudando algumas propiedades

*/

class Carro{
    //Agora vamos determinar o padrão
    
    #PROPIEDADES
    public $modelo;
    public $cor;

    #VISIBILIDADE DAS PROPRIEDADES
    /*
        public - O usuario pode ver esse valor
        private - Pode ser acessado na classe, mas não por herança e nem pelo usuário
        protected - Não pode ser vista pelo usuário, mas funciona em qualquer lugar da nossa classe e nas heranças
    */



    #MÉTDODOS - São funções
    /*
    function setModelo($modelo){
        $this->modelo = $modelo;
    }
    */

    /*
       #  O MÉTODO CONSTRUTOR 
        - Devemos cria-lo pois quando formos construir
        um novo objeto, ele vai invocar esse método construtor
        - Além disso, se temos varias propiedades, teriamos que criar
        uma função pra cada uma. Com o construtor já conseguimos 
        fazer isso mais eficiente
    */
    public function __construct(string $modelo, string $cor){
        $this->modelo = $modelo;
        $this->cor = $cor;
        //Eu posso por um echo aqui para mostrar logo o objeto
        //Se eu por que $variavel1=null e o mesmo na 2, ele não vai exigir que eu passe as propriedades logo

    }

    function getModelo(){
        return $this->modelo;
    }

    /*
        Agora a partir da versao 8.2 do PHP, é possivel passar
        os argumentos do construto como propiedades

        Não precisa mais por:
        public $modelo e etc

        Posso colocar diretamente no construtor:
        (public string $modelo, public int $ano) por exemplo

        Dentro do construtor também não precisa por o this->
    */

    /*
        # O MÉTODO DESTRUTOR
        - É a ultima função que vamos por no nosso projeto
    */

    function __destruct(){
        // echo "Chegamos no final da nossa classe";
        //Aqui podemos fazer varias coisas
    }

} 

//OBJETO
/*
$uno = new Carro();
var_dump($uno);

$uno->setModelo("Uno");
var_dump($uno);

$carro2 = new Carro();
$carro2->setModelo("Gol");
var_dump($carro2);

echo "O carro inicial é ". $uno->getModelo();
*/

$carro3 = new Carro("Tesla", "Azul"); //É necessário passar os argumentos
//var_dump($carro3);

?>