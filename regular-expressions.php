<?php

/*
We can use to go inside a string and see if it has something
if it has, return true or change it 


*/

$string = "My name is Roberto, Roberto is my name.";

#  "/whatever we put here becomes a regular expression/"

/*
# preg_match
    This function goes and take a certain string and search 
    in order to see if we have a certain ser of characters

    First we create the regular expression + pass the string +
    if I want I can say that its going to be an array

    If this check if the character exist 

    If I wanto to have all the results printed
    out inside an array, I can use preg_match_all
*/ 

if (preg_match("/Roberto/", $string, $array)){
    //echo "its a match";
    print_r($array);
}

echo "<br>";

if (preg_match_all("/Roberto/", $string, $array)){
    //echo "its a match";
    print_r($array);
    //This is going to return an array inside of another array
}

echo "<br>";

if (preg_match_all("/Roberto/", $string, $array)){
    //echo "its a match";
    echo $array[0][1];
    //This is going to return an array inside of another array
}

echo "<br>";

if (preg_match_all("/(Ro)(ber)(to)/", $string, $array)){
    //echo "its a match";
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    //This is going to return an array inside of another array
}

/*
# preg_replace
    This goes in and replaces some of the characters that
    were inside the string with another set of characters 
    that we decide 
*/

echo "<br>";

$string2 = preg_replace("/Roberto/", "Rangel", $string);

echo $string2;

echo "<br>";

echo preg_match("/./", $string); // Looking for .

echo "<br>";

echo preg_match("/(a|e)/", $string); //Looking for a or e

echo "<br>";
//If I put o, that does not exist, it will retun true because a exist

# "/[^abc]/" - if we have word that are not abc which is true for this example

# "/[a - z]/" - between a and z 

# "/[a-zA - Z]/" - between a and z as uppercase

# "/[0-9]/" - the numbers

###Quantifier 
//Look for how many D we have
$string = "My name is Roberto, Roberto is my name.";

preg_match_all("/R+/", $string, $array); 
print_r($array);

echo "<br>";
// If I put . after the R its going to show everything that exist after the R letter

# "/[1.*?2]/" - It will takes the first 1 and 2 and put inside of an array


//If it has at least 1 D, it will returns true
preg_match_all("/R{1}/", $string, $array); 
print_r($array);

echo "<br>";
// If I put {2}, it will returns false because I dont have two R together
// If I put {2,} it will returns true because I'm asking if it has 1 or more

###Character classes

preg_match_all("/\R{2}/", $string, $array); // It will look for 

echo "<br>";

### Ankers
// To see if it starts with some charater or ends with it
$string = "My name is Roberto, Roberto is my name.";

echo preg_match("/^M/", $string); //If starts with M

echo "<br>";

echo preg_match("/o$/", $string); //If ends with o

echo "<br>";

echo preg_match("/^M.*y$/", $string); //If starts with M and ands with e
































?>