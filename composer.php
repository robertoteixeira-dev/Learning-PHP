<?php

/*
    Composer es un gestor de dependenciasde PHP inspirado
en Node.JSy en Bundler de Ruby. 

    Los paquetes o bibliotecas son administrados al
nivel del proyecto, y aunque se pueden instalar
de manera global, la herramienta no es un 
administrador de paquetes como APT.

# REQUISITOS DEL SISTEMA
    Composer requiere de una versión 5.3.2 o superior de PHP.
    - También requiere de configuraciones sensibles de PHP
    que se configuran a medida que se avanza en el proceso
    de instalación 

# Para qué sirve?
    Nos permite agregar "paquetes" o bibliotecas a un 
    proyecto existente de PHP o crear un proyecto nuevo
    a través de una plantilla existente o un framework 
    de PHP como laravel

## PACKAGIST 
    Es un repositorio PHP
    https://packagist.org/

    Busca laravel
    El primer resultado: composer create-project laravel/laravel

    Busca laravel installer 
    El segundo resultado: composer requir laravel/installer

    templating 
        Es una libreria 
        composer require twig/twig

## INSTALACIÓN DE DEPENDENCIAS DE PHP CON COMPOSER
    1. twig/twig - composer require twig/twig
    2. smarty - composer require smarty/smarty
    3. mustache - composer require mustache/mustache
    4. monolog - composer require monolog/monolog "1.26"

        Put composer info o composer show en 
        el terminal para ver todos

    # Agora vou em outro projeto 
        1. moodle-alternate-admin: 
        composer create-project manuelgil/moodle-alternate-admin

## CÓMO ELIMINAR UNA DEPENDENCIA CON COMPOSER 
    composer remove monolog/monolog   

## CONFIGURANDO UN PROYECTO EN PHP VANILLA CON COMPOSER
    Va até seu projeto no terminal
        composer init
        - Vai pedir o nome do projeto e descrição
        - Minimum stability []: alpha
        - License []: MIT

    Agora instale algumas dependencias
        - session 
            11 aura
        - monolog
            0
        - mustache
            0
        - phroute
            0
        - phpdotenv
            0
        - phpunit
            0
    enter
    composer show 

    composer validate 

    AGORA VEJA O ARQUIVO:
    autoload.php

    AGORA CRIE O INDEX FORA 
    index.php
        Nele, inclua:
            include __DIR__ . '/vendor/autoload.php';
        Si o index.php esta na pasta public, ponha:
            include __DIR__ . '../vendor/autoload.php';

    .env 
        Aqui se guarda as variaveis de entorno
    .env.example
        Esse serve para compartilhar 
        Colocamos uma estrutura de como é nosso arquivo original
    
    #INSTALANDO ALGUMAS LIBRERIAS
        composer install - Esse comando nos permite realizar a instalação do projeto desde cero
        composer update - atualiza todas as dependencias e instala as novas dependencias
        composer install - soluciona errores

## COMANDOS IMPORTANTES DE COMPOSER
    # composer show - verificar o que tem instalado
    # composer i --help - instalar e ver os comendos de ajuda
    # composer i --no-dev - nos ajuda na instalação de paquetes
    # composer update -optimize-autoloader - instalção de dependencias de desenolvimento
    e otimizar autoload (podia ser u -o)
    -o elimina as pastas que tem haver com o modo de desenvolvimento
    # composer check-platform-reqs --no-dev 

## VERSIONES DE SOFTWARE (Versionamiento semántico o SemVer)
    Especificación que nos indica en que estado de
    desarrollo se encuentra el software

    2 - mayor - RUPTURA: no es seguro actualizar
    1 - menor - CARACTERÍSTICA: seguro para actualizar, nuevas características
    0 - parche - REPARAR: seguro para actualizar, corrección de fallos

    v0.1.0 - se inicia assim
    v1.0.0 - se o código ja se encontra em produção
                Despois quando muda a versão menor, volta pra parche e vai solucionando erros
    

    Restricción de versión exacta
    Rango de versiones
    Intervalo de versiones con guiones

## PHP STANDARDS - Recommendations (PSR and PHPFIG)
    PHPFIG: PHP Framework Interop Group
        Su propósito inicial era estandarizar soluciones  
        para las necesidades más comunes de las aplicaciones
        PHP.
    PSR: PHP Standards Recommendations
        Son una serie de recomendaciones que 
        se pueden seguir en los proyectos PHP

    ESTILO DE CÓDIGO Y AUTOCARGA DE CLASES
        PSR-1 Basic Coding Standard
            Clases, espacio de trabajo, Constantes e Métodos
        PSR-12 Coding style guide
            Salto de línea, Espacios en blanco y Sangrías
        PSR-4 Improved Autoloading


    # Página EditorConfig
    # EditorConfig for VS Code - Extension
        Clica com o lado direito e vai em generar editorconfig
            [*.php]
            ident_size = 4 
            end_of_line = lf

        PSR-0 AUTOLOADING STANDARD
            No <composer class="json:"></composer>
                "autoload": {
                    "files": {
                        "autoload.php"
                    }
                }
            No terminal:
                composer validade
                composer dump-autoload -o

        PSR-4 IMPROVED AUTOLOADING

## CÓMO UTILIZAR LAS BIBLIOTECAS (PAQUETES) DE PHP CON COMPOSER
    pasta public 
        index.php
    instala o paquete (exemplo: symfony)
    instala composer require http-foundation
    





*/







?>