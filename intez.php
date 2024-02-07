<!-- ESERCIZIO 1 -->

<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];
$counter =0;
$somma = 0;
foreach($numbers as $number){
    $counter++;S
    if($number%2==0){
        $somma= $somma+$number;
    }
}
echo($somma/$counter); 

<!-- ESERCIZIO 3 -->

<?php

for($i=1; $i<=100; $i++){
    if($i%15 == 0){
        echo("HACKADEMY\n");
    }else if($i%3 == 0){
        echo("PHP\n");
    }else if($i%5 == 0){
        echo("JAVASCRIPT\n");
    }else{
        echo($i."\n");
    }
}