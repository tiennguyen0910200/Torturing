<?php
$fruits = array("Apple", "Banana", "Ogange");
$leng = count($fruits);
echo($leng);
echo "<br>";
echo "<hr>";

echo $fruits[1];
echo "<br>";
echo "<hr>";

$age = array("An"=>"27", "Binh"=>"25", "Cuong"=>"22");

echo "Tuoi cua Cuong la:  ";
echo $age["Cuong"];
echo "<br>";
echo "<hr>";

krsort($age);
foreach($age as $x =>$x_value){
    echo "Key=" .$x . ", Value=" .$x_value;
    echo "<br>";
}
echo "<br>";
echo "<hr>";

$color = array("red","green","blue","yellow");
sort($color);
echo "Sap xep theo alphabet";
echo "<br>";
 foreach($color as $x ){
     echo $x;
     
     echo "<br>";
     
 
 }
 echo "<hr>";
 echo "Sap xep nguoc theo alphabet";
 echo "<br>";
 rsort($color);
 foreach($color as $x ){
     echo $x;
     echo "<br>";
 }
 echo "<hr>";

sort($age);
foreach($age as $x =>$x_value){
    echo "[$x]=$x_value";
    echo "<br>";
}
?>