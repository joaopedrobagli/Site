<!DOCTYPE html>
<html lang="en">
<title>
LOGIN
</title>
<head>
<meta charset="UTf-8">
<meta http-equiv="x-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-widht, initial-scale=1.0">

<style>
	
	
body{
	background-image: linear-gradient(#f0181801,#00000063),url(s8.jpg);
	background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    min-height: 115vh;
      font-family:cursive;
	

} 
::-webkit-scrollbar{
	width: 5px;
}
::-webkit-scrollbar-thumb{
	background-color: black;
}
	div{
		background-color:rgba(0,0,0,0,8);
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		padding: 19%;
		border-radius: 15px;
		color: white;
		font-size: 25px;
	}
	input{
		padding: 15px;
		border: none;
		outline:none;
		font-size: 15px;
		text-decoration: none;
	    color: white;
		border-radius: 30px;
		
	}
	input{
		padding: 15px;
		width: 100%;
		outline: none;
		margin: 5px;

	}
	input{
		background-color: black;
	color: white;
	}
	
	
	
	
	button{
		background-color: darkblue;
		border: none;
		padding: 15px;
		width: 100%;
		border-radius: 30px;
		color: white;
		font-size: 20px;
	
		
	}
	button:hover{
		background-color: black;
		cursor: pointer
	}
	
	</style>
	</head>
	<body>
	<div>
		<h1>Login</h1>
	
		<form method="post" action="teste_login.php">
	<input type="text" placeholder="Email"name="email" id="email"><br>
<input type="password" placeholder="Senha"name="senha" id="senha"><br><br>
<input type="submit" value="ACESSAR" id="entrar" name="entrar"><br>


	



<a  face="Verdana" style="color:white;" align="center" href="cadastro.php"><font size="1,5">NÃO TEM CADASTRO?CLIQUE AQUI!</font></a> 
</div>
</body>
</html>

