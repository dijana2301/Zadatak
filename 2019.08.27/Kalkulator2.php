<html>
<head>
<title>Kalkulator</title>
</head>
<body>
<h2 style="text-align:center;">Kalkulator</h2>

<table style="border: 2px solid black; background-color:powderblue;">

<form action="Kalkulator2.php" method="POST";>

<tr><td><h2>&nbspUnesi prvi broj: <input type="number" name="num1"><br><br></h2></td></tr>
<tr><td><h2>&nbspOdaberite računarsku operaciju:<br>
                              <input type="radio" name="oper" value="+">  + <br>
                              <input type="radio" name="oper" value="-">  - <br>
                              <input type="radio" name="oper" value="*">  * <br>
                              <input type="radio" name="oper" value="/">  % <br></h2></td></tr>
<tr><td><h2>&nbspUnesi drugi broj: <input type="number" name="num2"><br><br></h2></td></tr>

<tr><td><h2><input type="Submit" value="Izračunaj"></h2></td></tr>
</form>
</table>

<?php
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $oper = $_POST["oper"];

 echo "<br>"."Rezultat: ";



   if ($oper == "+" ) {
        echo $num1 + $num2;
    } elseif ($oper == "-" ){
        echo $num1 - $num2;
    } elseif ($oper == "*" ){
        echo $num1 * $num2;
    } elseif ($oper == "/" ){
        echo $num1 / $num2;
    } elseif($oper == "" ){
        echo "0";
    }

?>

</body>
</html>
