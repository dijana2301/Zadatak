<html>
<head>
<title>Kalkulator</title>
</head>
<body>
    <h2 style="text-align:center;">Kalkulator</h2>

<form action="Kalkulator2.php" method="POST";>

Unesi prvi broj: <input type="number" name="num1"><br><br>
Odaberite računarsku operaciju:<br>
                              <input type="radio" name="oper" value="+">  + <br>
                              <input type="radio" name="oper" value="-">  - <br>
                              <input type="radio" name="oper" value="*">  * <br>
                              <input type="radio" name="oper" value="/">  % <br>
Unesi drugi broj: <input type="number" name="num2"><br><br>

<input type="Submit" value="Izračunaj">
</form>

<?php
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $oper = $_POST["oper"];

 echo "Rezultat: ";


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