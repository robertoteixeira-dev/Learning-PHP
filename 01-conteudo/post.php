<?php

/*
$_POST - Enviar informações

Nesse método a informação não fica 
vizivel na URL

No method eu coloco post e no action
eu não coloco nada pois ele vai enviar
para a mesma página

Mas tbm posso criar uma pagina para receber
a informação do action

É necessário ter alguns cuidados com a segurança:
- combater o SQL injections e o XSS que
é uma tentativa de manipular um código

*/


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

    <form method="post" action="recebe-post.php">
        <input type="text" name="nome" placeholder="Digite seu nome aqui"><br>
        <input type="text" name="idade" placeholder="Digite sua idade aqui"><br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>