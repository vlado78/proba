<?php

$prviBroj = $_POST["b1"];
$drugiBroj = $_POST["b2"];

echo "Upisao si broj ".$prviBroj." kao prvi broj i upisao si broj ".$drugiBroj." kao drugi broj<br><hr>";
//Prvi nači veći manji
if ($prviBroj>$drugiBroj){
    echo $prviBroj."  je veći od  ".$drugiBroj;
}else{
    echo $prviBroj."  je manji od  ".$drugiBroj;

};

echo "<br><hr><br>";
//Drugi način veči manji
echo $prviBroj>$drugiBroj ? $prviBroj."  je veći od  ".$drugiBroj :  $prviBroj."  je manji od  ".$drugiBroj;

echo "<br><hr><br>";
//ispis rezultata
$rezultat = $prviBroj + $drugiBroj;

echo "Njihov zbroj je = ".$rezultat;
echo "<br><hr><br>";

if ($rezultat %2===0){
    echo "Rezultat je paran broj   <br/>";
    }else{ 
    echo  "Rezultat  je nepran   <br/>";
};
echo "<br><hr><br>";


echo "Svi prosti brojevi od 1 do rezltata su : <br/>";
for($i=1;$i<=$rezultat;$i++){  //numbers to be checked as prime

        $counter = 0; 
        for($j=1;$j<=$i;$j++){ //all divisible factors


              if($i % $j==0){ 

                    $counter++;
              }
        }

      //prime requires 2 rules ( divisible by 1 and divisible by itself)
      if($counter==2){

             print $i." je prosti broj <br/>";
      }
  }




