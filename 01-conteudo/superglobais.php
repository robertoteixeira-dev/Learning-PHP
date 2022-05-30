<?php
/*
SUPERGLOBAIS

São variaveis que são sempre acessíveis 
e pode pode acessar em qualquer lugar

$GLOBALS 
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

*/

//GLOBALS

$a = 10;
$b = 15;

function soma(){
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
//No caso go GLOBALS, há uma maneira mais fácil que é:
//global $a, $b, $c;

soma();
echo $c;

/* $_SERVER 
É uma variável que contém informações sobre
o cabeçário da requisição, sobre os caminhos, 
os locais de script e etc
*/

//Mostrar o caminho pro propio arquivo
echo $_SERVER['PHP_SELF']; 

//Mostrar o nome do servidor, nesse caso localhost
echo $_SERVER['SERVER_NAME']; 

//Mostrar o nome do servidor, nesse caso localhost
echo $_SERVER['HTTP_HOST']; 

//Mostrar o endereço remoto, endereço de IP
echo $_SERVER['REMOTE_ADDR']; 

//Mostrar informações sobre quem está acessando nossa página
echo $_SERVER['HTTP_USER_AGENT']; 

//VER TUDO QUE JÁ TEM NO _SERVER
foreach ($_SERVER as $key => $value) {
    echo "<strong>$key</strong> : $value <br>";
}


?>