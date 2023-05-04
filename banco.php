<?php




 $id=mysql_connect("localhost", "root", "");
$con=mysql_select_db("prova", $id);

$nome=$_POST['nome'];
$email=$_POST['email'];



$sql="insert into cliente (nome,email)
   values ('$nome', '$email')";
   
   mysql_query($sql);
   mysql_close($id);
   
   header("location: index.php");
   
?>