<!DOCTYPE html>
<html> 
<head>
<title>Zadaća 1</title>
</head>
<body>
  <h2 style="text-align:center;">Zadatak br.1</h2>
 <b>Varijable (string, broj, niz)</b><br>

<?php 
$a="Grad "; //string
$b=3; //broj
$c="2";
$gradovi = array("Banja Luka", "Moskva", "Beograd"); //niz

echo $a."broj ".$b." je ".$gradovi[2].".<br>";
echo $a."broj ".$c." je ".$gradovi[1].".<br>";
?>
<br> <br> 
<b>Aritmetički operatori (sabiranje, oduzimanje, dijeljenje, mnozenje)</b><br> 

<?php
$x=50;
$y="25";
$a=2;
$b=$a + 4;
$c=55;
$d=10;

$sabiranje = $x + $y; 
$oduzimanje = $x - $y;
$dijeljenje = $x / $y;
$mnozenje = $x * $a;
$modul = $x % $b;

echo $sabiranje."<br>"; 
echo $oduzimanje."<br>"; 
echo $dijeljenje."<br>"; 
echo $mnozenje."<br>"; 
echo $modul."<br>";
echo $c += 3; // $e = $e + 3; or -=, *=, /=;
?>

<h2 style="text-align:center;">Zadatak br.2</h2>
<b>Upotreba kontrolnih struktura (sa varijacijama == i ===)</b><br> 

<b> 5 == "5" - </b>
<?php
$a=5;
$b="5";

if($a==$b){
    echo "They are equal value.";
} else {
    echo "They are not equal value.";
}

echo "<br>";
?>

<b> 5 === "5" - </b>
<?php
if($a===$b){
    echo "They are same type.";
} elseif($a==$b){
    echo "They are equal values but not same type.";
} else {
    echo "They are not equale values and are not same type too.";
}
?>

<h2 style="text-align:center;">Zadatak br.3</h2>

<b> Kupovina - ako kupac ima na računu 100KM a cijena artikla je 125KM: </b>
<br> <br>

<?php
$account = 100;
$price = 125;

if($account <= 0){
    echo "Your account is empty or overdrawn.";
} elseif ($account < $price){
    echo "You do not have enough money in your checking account for this purchase.";
} else {
    echo "Your purchase is successful.";
}
?>
 
<br> <br> <br> <br>
<b> Kupovina - ako kupac ima na računu 150KM a cijena artikla je 125KM: </b>
<br> <br> 

<?php
$account = 150;

if($account <= 0){
    echo "Your account is empty or overdrawn.";
} elseif ($account < $price){
    echo "You do not have enough money in your checking account for this purchase.";
} else {
    echo "Your purchase is successful.";
}
?>

</body>
</html>
