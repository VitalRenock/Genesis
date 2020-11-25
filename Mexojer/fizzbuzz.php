<?php
//
// Calculer pour une suite de nombre:
//    si le nombre est divisible par 3 afficher Fizz
//    si le nombre est divisible par 5 afficher Buzz
//    si le nombre est divisible par 3 et 5 afficher FizzBuzz
//    sinon afficher le nombre
//
function displayLine($line)
    {
    echo "<p>".$line."</p>";
    }   
function FizzBuzz ($max)
    {
    // de 1 à $max y compris
    for ($i = 1; $i <= $max; $i++)
        {
        // pré calcul des restes
        $mod3 = $i % 3 == 0 ;
        $mod5 = $i % 5 == 0 ;
        //
        if ( $mod3 && $mod5 )
            {displayLine("FizzBuzz !!");}
        else if ($mod3)
            {displayLine("Fizz !");}
        else if ($mod5)
            {displayLine("Buzz !");}
        else 
            {displayLine($i);}
        }
    }
//
$max = 30 ;
displayLine ("This is FizzBuzz from 1 to $max");
displayLine ("===============================");
//
FizzBuzz(30);
//
displayLine ("===============================");
?>