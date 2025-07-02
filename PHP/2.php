<form action="2.php">
<input type="color" name="cor">
<input type = "number" name= "A">
<input type = "number" name= "B">
<input type = "submit">
</form>

<?php

$A=0; $B=0;

if(isset($_GET["A"])){
    $A=$_GET["A"];
}

if(isset($_GET["B"])){
    $B=$_GET["B"];
}

echo "A soma de A e B é = ";
echo $A. "+" .$B ."=" .$A+$B;