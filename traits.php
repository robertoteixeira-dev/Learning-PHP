<?php

/*
TRAITS (CARACTERÍSTICAS)
    É um reaproveitamento de código

*/

trait Comer {
    function comer(){
        echo "Hmm que fome";
    }
}

class Pessoa{
    function teste(){
        echo "Essa é a classe pesso <br>a";
    }

    /*
    function comer(){
        echo "Hmm que fome";
    }
    */

    use Comer;
}

/*
    Ficaria muito estranho por a classe animal
    como uma classe filho de pessoa. Por isso,
    temos os Traits para reaproveitar o código
    e não ter que redeclarar a função comer
*/

class Animal {
    //Aqui necessito que tenha a função comer, mas seria ruim redeclarar
    use Comer;
}


/*
###CONCEITOS IMPORTANTES###

CLASSES ABSTRATAS
    São classes que fornecem um modelo para a classe filho
    terem uma determinada função e propriedades. 
    
    #EXEMPLO
    abstract class Carro{
        abstract protected function teste($nome); 
        //It can be public
        //It can have properties that are public, private or protected
    }

    class Audi extends Carro{
        function teste($nome, string $placa=""){
            echo "Olá $nome sou um método concreto a placa $placa";
        }
    }

INTERFACES
    São parecidas com as classes abstratas, mas há diferenças
    - Interfaces não podem ter propriedades, 
    enquanto classes abstratas podem

    - Todos os métodos de uma interface devem ser
    obrigatóriamente publico, enquanto os de uma 
    classe abstrata podem ser publicos ou protegidos

    - Multiplas classes podem implementar os 
    métodos da interface (Polimorfismo)

    - Todos os métodos de uma interface são
    abstratos

    - Interface let us define the function
    without implementing them

    - On the interface you can create functios and
    hide the implementation

    - Interfaces allows to change the implementation
    of the function without changing how you use it

    #EXEMPLO
    interface MetodosFrutas {
    function criar($nome, $cor);
    function completo();
}

    class Fruta implements MetodosFrutas {
    #METODO DA CLASSE FRUTA
    function teste(){
        echo "Essa é uma classe fruta!<br>";
    }
    //Agora tenho que declarar os dois métodos da interface

    #MÉTODOS DA INTERFACE - São obrigatórios de aparecer
    function criar($nome, $cor){
        $this->nome = $nome;
        $this->cor = $cor;
    }

    function completo(){
        echo "A fruta é $this->nome e a cor é $this->cor <br>";
    }
    }

TRAITS    
    Já os traits são um trecho de código que será reaproveitado
    em inúmeras classes. São características. 

    Traits are similar to multiple inheritance
    multiple inheritance are not support in php, we use traits


    #EXEMPLO
    trait Comer {
    function comer(){
        echo "Hmm que fome";
    }
    }

    class Pessoa{
    function teste(){
        echo "Essa é a classe pesso <br>a";
    }

    use Comer;
    }

MULTIPLE INHERITENCE 

    Digamos que temos o mesmo metodo trait 
    em duas classes e queremos usar o de 
    uma das duas

    class AllInOneCoffeMaker extends CoffeMaker
    {
        use CappuccinoTrait {
            CappuccinoTrait::makeLatte insteadof LatteTrait;
        }
        use LatteTrait {
            LatteTrait::makeLatte as_makeOriginalLatte;
        }
    }

    #WE CAN PUT A TRAIT INSIDE OF ANOTHER TRAIT
    trait Cappuccino {
        use LatteTrait;
    }

    #When you have an abstract class in a trait
    you dont have to mark this trait as abstract

    # Trait != Contract
    # Interface = Contract


*/










?>