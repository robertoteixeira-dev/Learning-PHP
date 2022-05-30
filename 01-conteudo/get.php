<?php

/*
$_GET

Utilizamos para pegar informações do 
cabeçário HTTP da minha página, ou seja, 
na URL da página

Por exemplo, para pegar um nome 
localhost/Learning PHP/get.php?nome=Roberto



//CODIGO USADO PARA EXEMPLO
<body <?php if($nome=="Roberto") { echo "style='background:green; color:white;'";} ?>>

*/


?>
<?php
/*
//É necessário sempre fazer essa verificação no inicio 
if (isset($_GET['nome'])){
    $nome = htmlspecialchars($_GET['nome']);
}else{
    $nome = "Mundo!";
}

if (isset($_GET['cor'])){
    $cor = htmlspecialchars($_GET['cor']);
}else{
    $cor = 'white';
}

//Eu posso usar o comando htmlspecialchars para evitar que alguém possa colocar um código malicioso na minha url


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <h1>Olá <?php echo $nome; ?></h1>
    
    <a href="get.php?nome=Roberto&cor=green">Ir para Roberto</a><br>
    <a href="get.php?nome=Vitor&cor=blue">Ir para Vitor</a><br>
    <a href="get.php?nome=Jorge&cor=pink">Ir para Jorge</a><br>


</body>
</html>
*/

?>

<?php
//UTILIZANDO GET COM FORMULÁRIOS
if ( isset($_GET['nome']) && isset($_GET['idade']) ) {
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    echo "<h1>O nome é $nome e a idade é $idade </h1>";
}

//Eu posso criar um arquivo chamado recebe_get.php e colocar após o method="get" action="recebe_get.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>

    <form method="get">
        <input type="text" name="nome" placeholder="Digite seu nome aqui"><br>
        <input type="text" name="idade" placeholder="Digite sua idade aqui"><br>
        <button type="submit">Enviar</button>
    </form>

    
</body>
</html>