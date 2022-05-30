<?php 
    if (isset($_POST['nome']) && isset($_POST['idade'])){
            
        $nome = clearPost($_POST['nome']);
        $idade = clearPost($_POST['idade']);

        echo "<h2>Nome: $nome <br> Idade: $idade</h2>";
    }

    //Por segurança, devemos tratar as informações que chegam
    function clearPost($value){
        $value = trim($value); //trim - tira os espaços em branco e caracteres especiais
        $value = stripslashes($value); // tira as barras de uma string
        $value = htmlspecialchars($value); //Impede a injeção de html protegendo seu código
        return $value;
    }

?>