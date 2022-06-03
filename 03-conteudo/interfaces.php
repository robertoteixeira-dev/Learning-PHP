<?php

/*
INTERFACES
    São parecidos com as classes abstratas. 
    As interfaces definem quais métodos uma 
    classe precisa obrigatóriamente ter.




CLASSES ABSTRATAS
    São um tipo de classe que servem como modelo
    para que as classes filhos tenham os mesmos
    métodos, propriedades e etc. 

DIFERENÇA ENTRE INTERFACE E CLASSES ABSTRATAS
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

*/

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

//ANOTHER INTERFCE EXAMPLE


interface Database {
    //Function definitions
    function listOrders();
    function addOrder();
    function removeOrder();
}

class MySQLDatabase implements Database {
    //Here is where we write the code for each function
    function listOrders(){
        //Code for listing orders
    }

    function addOrder(){
        //Code for adding orders
    }

    function removeOrder(){
        //Code for removing orders
    }
}

//NOW CREATE THE OBJECT
$database = new MySQLDatabase();
foreach ($database->listOrders() as $order){
    //Listing orders code
}

//IF WE WANT TO CHANGE THE TYPE OF DATABASE
    #interface let us do this

    //Create a new class and change it

    class OracleDatabase implements Database {
        //Here is where we write the code for each function
        function listOrders(){
            //Code for listing orders
        }
    
        function addOrder(){
            //Code for adding orders
        }
    
        function removeOrder(){
            //Code for removing orders
        }
    }

    $database = new oracleDatabase();
    foreach ($database->listOrders() as $order){
    //Listing orders code
}

?>