<?php
/*
While - Vai repetir enquanto for verdadeiro
Do While - Executa algo e depois faz o loop
For - Vai referir uma quantidade de vezes
Foreach - Para cada item 
*/

//WHILE
$x = 0;
while ($x <= 100){
    echo "O número é: $x <br>";
    $x+=10;
}

echo "<br></br>";

$y = 1;
while ($y <= 5){
    echo "O número é: $y <br>";
    $y++;
}

echo "<br></br>";
// continue - skip the conditional the move on, for exemplo, if I want to skip the par if($i % 2 === 0){$++ continue: }
// break - to stop


//DO WHILE
$a = 1;
do {
    echo "O número é: $a <br>";
    $a++;
} while ($a <= 5);


echo "<br></br>";



//FOR 
for ($b = 0; $b <= 10; $b++){
    echo "O número é: $b <br>";
}

/* TO SHOW EACH LETTER IN EACH LINE */
$text = 'Hello World';
for($i = 0; $i < strlen($text); $i++){
    echo $text[$i] . '<br />';
}


echo "<br></br>";



//FOREACH -arrays or objects
$cores = ["azul", "amarelo", "verde"];

foreach ($cores as $cor){
    echo "A cor é $cor <br>";
}
//We could acess the key puting as $key => $cor

//ACEESS THE ELEMENTS INCLUINDO AN ARRAY OF ANOTHER ARRAY
$user = [
    'name' => 'Roberto',
    'email' => 'roberto@gmail.com',
    'skills' => ['php', 'react', 'javascript'],
];

foreach($user as $key => $value){
    echo $key . ': ' . json_encode($value). '<br/>';
}

/*

I could also create an IF:
 if (is_array($value)){
    foreach($value as $skill){
        echo $skill . ' - ';
    }else{
        echo $value
    }
    echo '<br/>';
}

*/

?>