<?php
 include_once 'Usuario.php';
 session_start();

 if(isset($_GET['nome']) && ($_GET['email']) && ($_GET['senha']) ){
    $usr=new Usuario($_GET['nome'],$_GET['email'],$_GET['senha'] );
 } else {
    $usr=null;
 }

 if(!isset($arrayUSR)){
   $arrayUSR=array();
 }
 if(isset($_SESSION['usrlist'])){
    $arrayUSR=$_SESSION['usrlist'];
 }
 if(isset($usr)){
    array_push($arrayUSR, $usr);
    $_SESSION['usrlist']=$arrayUSR;
 }
echo "<table>";
echo "<tr> <td> id </td> ";
echo "     <td> nome </td>";
echo "     <td> email </td>";
echo "     <td> senha </td>";
echo "</tr>";

foreach($arrayUSR as $u){
    echo "<tr> <td> ", $u->id , " </td>";
    echo "     <td> ",$u->nome , "</td>";
    echo "     <td> ",$u->email , "</td>";
    echo "     <td> ",$u->senha , "</td>";
    echo "</tr>";
}
?>