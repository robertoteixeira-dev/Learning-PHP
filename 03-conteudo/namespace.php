<?php

/*
Serve para organizar melhor nosso projeto
agrupando classes que trabalham juntas pra
realizar uma tarefa

Também permite que a gente use o mesmo nome
de uma classe em vários arquivos

Imagine que temos diferentes tipos de login
com isso, teriamos varias classes com o mesmo
nome

CRIA PASTA: 
src


CRIA PASTA: 
class 
- dentro de class: cria pasta API (que seria a API do google no exemplo)

Agora não preciso mais chamar de loginGoogle
Posso chamar apenas de login

e dentro do arquivo tbm posso chamar apenas
de login e de cadastrar, pois estão em pastas 
separadas

PARA INSTANCIAR 
- Vai em cada arquivo e coloca sua namespace:
    namespace src

    namespace api

- Agora coloca na pasta onde voce instancia:
    $login = new src\Login();

    $loginGoogle = new api\Login();

*/
























?>