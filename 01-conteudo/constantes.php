<?php
/*CONSTANTES*/
//define + nome do array + valor que pode ser um array, string, número e etc
define("exemplo",10); //Nas versões atuais do PHP toda constante já é sensitive
echo exemplo;

// define('name', 'value');
// The name is case sensitive 
// You don't need put the $ in constants 
// STATUS_PAID 

function teste(){
    echo exemplo;
}

teste();
//Eu posso utilizar a constante dentro e fora de funções, diferente das variáveis que tenho que por globais

/*
The main difference between the define fuction and the const
keyword is that constants created with const keyword are 
actuall defined at a compile time while constants created
with define function are defined at a runtime. So, you can't
use a constant created with const in loop, if and etc
*/

/*
use constants when you have a static data that
doesn't change like status
*/

/*
We have PHP created constants
*/
echo PHP_VERSION; //This will show the php version

/*
MAGIC CONSTANTS
Are constants but their values can change depending
where they're used
*/

echo __LINE__;
echo __FILE__;



?>




