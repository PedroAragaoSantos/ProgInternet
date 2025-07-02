<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">
    <h2>Imprima todos os temos de uma P.A até N informado pelo usuário</h2>

    <input type="text" name="valor" value="<?php echo isset($_GET["valor"])? $_GET ["valor"] : ""; ?>">
    <input type="submit">

</form>
<?php
    $v=0; $pa=0;

    if(isset($_GET["valor"])){
        $v=$_GET["valor"];
    }

    while($pa < $v){
        $pa = $pa + 3;
        echo $pa."<br>";
    } 

?>



    
</body>
</html>