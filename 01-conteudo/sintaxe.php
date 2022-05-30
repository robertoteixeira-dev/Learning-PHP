<?php
// CURSO DE PHP (PT/ES)

echo "<p>Welcome</p>"; //É obrigatório por o ;
Echo "<p>Welcome 2</p>"; //Não faz diferença se é com maiusculo pois o echo não é sensitivo
ECHO "<p>Welcome 3</p>"; //Já nas variáveis sim faz diferença
$cor = "Vermelho";
echo $cor;
//Se o arquivo terá apenas PHP, então não precisa poro fechamento, mas é uma boa prática
?>


<?php
//Podemos usar o PHP junto com HTML e até mesmo com JavaScript
$texto = "Hello";

//Posso criar variaveis com conteudo de HTML dentro
$html = "<h1>Hello world!</h1><p>Welcome to PHP</p>";
echo $html;

//Posso inclusive criar um script de JS dentro da minha variável de PHP
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $texto; ?></h1>

    <?php
    //Posso mesclar o PHP com HTML e usar condições para ativar o HTML
    $ativado = "sim"; ?>
    <?php if ($ativado == "sim") { ?>
        <h1>Está ativado</h1>
    <?php }else{ ?>
        <h1>Não está ativado</h1>
    <?php } ?>
    
</body>
</html>




