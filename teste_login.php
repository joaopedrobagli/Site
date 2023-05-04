<?php

$email = $_POST['email'];
//$entrar = $_POST['entrar'];
$senha = $_POST['senha'];

$connect = mysql_connect("localhost","root","");
$db = mysql_select_db("tcc", $connect);

  if (!isset($entrar)) 
{


  $verifica = mysql_query("SELECT * FROM cadastrar WHERE email = '$email' AND senha = '$senha'");
   while ($obj = mysql_fetch_array($verifica))
   {
    $emailbanco = $obj[2];
    $senhabanco = $obj[1];
   }
   

      if (($emailbanco <> $email) && ($senhabanco <> $senha)){
        echo"<script language='javascript' type='text/javascript'>
        alert('email e/ou senha incorretos');window.location
        .href='Login2.php';</script>";
        die();

      }else{
        setcookie("email",$email);
        header("Location:link.html");
      }
  
     
  }
  session_start();
    //Recebe o valor digitado no campo nome
    $email= $_POST['email'];
    $senha= $_POST['senha'];
    
    //Verificar se o usuário preencheu o campo
    if(empty($email)){
        echo "<br>Campo email obrigatorio";
        $_SESSION['erroCampoNome'] = "Campo nome obrigatorio";
        header("Location: Login2.php");
    }
    
    //Verificar a existencia da variavel $_POST['email']
    if(isset($_POST['email'])){
        echo "<br>Existe Variavel";
        if(!empty($_POST['email'])){
            echo "<br>Campo Preenchido";
        }
    }
?>