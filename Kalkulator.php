<html>
<head>
<title>Kalkulator</title>
</head>
<body>
    <h2 style="text-align:center;">Kalkulator</h2>

<form action="Kalkulator.php" method="POST";>

Unesi prvi broj: <input type="number" name="num1"><br><br>
Unesi drugi broj: <input type="number" name="num2"><br><br>
Odaberite računarsku operaciju:<br>
                              <input type="submit" name="oper" value="+">  
                              <input type="submit" name="oper" value="-">  
                              <input type="submit" name="oper" value="*">  
                              <input type="submit" name="oper" value="/">  

</form>

<?php
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $oper = $_POST["oper"];

 echo "Rezultat: " .izracunaj($num1, $num2, $oper);

function izracunaj($num1, $num2, $oper){
    switch ($oper) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '/':
            return $num1 / $num2;
        case '*':
            return $num1 * $num2;
        default:
            return 0;
    }
}

?>
</body>
</html>