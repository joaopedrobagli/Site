
<!DOCTYPE html>
<html lang="pt-br">
<title>
CADASTRO
</title>
<meta charset="UTf-8">
<meta http-equiv="x-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-widht, initial-scale=1.0"> 
<style>
	
	
body{
	font-family: cursive;
	background-image: linear-gradient(#f0181801,#00000063),url(s8.jpg);
	background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    min-height: 115vh;
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
		padding: 17%;
		border-radius: 15px;
		color: white;
	}
	input{
		background-color: black;
		padding: 15px;
		border: none;
		outline:none;
		font-size: 15px;
		border-radius: 30px;
		color: white;
	}
	button{
		background-color: black;
		border: none;
		padding: 15px;
		width: 100%;
		border-radius: 30px;
		color: white;
		font-size: 15px;
	}
	button:hover{
		background-color: darkred;
		cursor: pointer
	}
	section{
    margin: 30px;
    text-align: center;
    position:absolute;
    top: 68%;
    left: 34%;
    margin-right: -40%;

}
.button-as-link {
   padding:  15px;
   width: 233%;
   background-color: black;
   border: none;
   border-radius: 30px;
   font-family:Italic;
   font-size: 17px;
}
.button-as-link a{
    text-decoration: none;
    color: rgb(255, 255, 255);
}
.button-as-link:hover{
    background-coloR:darkred;
    cursor: pointer
}
button {
 padding: 15px 25px;
 border: unset;
 border-radius: 30px;
 color: #212121;
 z-index: 1;
 background: #e8e8e8;
 position: relative;
 font-weight: 1000;
 font-size: 17px;
 -webkit-box-shadow: 4px 8px 19px -3px rgba(green);
 box-shadow: 4px 8px 19px -3px rgba(green);
 transition: all 250ms;
 overflow: hidden;
}

button::before {
 content: "";
 position: absolute;
 top: 0;
 left: 0;
 height: 100%;
 width: 0;
 border-radius: 15px;
 background-color: green;
 z-index: -1;
 -webkit-box-shadow: 4px 8px 19px -3px (green);
 box-shadow: 4px 8px 19px -3px green;
 transition: all 250ms
}

button:hover {
 color: #e8e8e8;
}

button:hover::before {
 width: 100%;
}
button2 {
 padding: 15px ;
 text-align: center;
 border: unset;
 border-radius: 30px;
 width: 21%;
 top: 70%;
 color: #212121;
 z-index: 1;
 background: #e8e8e8;
position:absolute;
 font-weight: 1000;
 font-size: 17px;
 -webkit-box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 box-shadow: 4px 8px 19px -3px rgba(0,0,0,0.27);
 transition: all 250ms;
 overflow: hidden;
}

button2::before {
 content: "";
 position: absolute;
 top: 0;
 left: 0;
 height: 100%;
 width: 0;
 border-radius: 15px;
 background-color: red;
 z-index: -1;
 -webkit-box-shadow: 4px 8px 19px -3px red;
 box-shadow: 4px 8px 19px -3px red;
 transition: all 250ms
}

button2:hover {
 color: #e8e8e8;
}

button2:hover::before {
 width: 100%;
}


	</style>

	</head>
	<body>


  <div>
  <h1>CADASTRO</h1>
  
  
     <form name=f1 method=post action=banco.php>
	 <input type=text  placeholder=Nome name=nome > <br> <br>
	<input type=email  placeholder=Email name=email> <br> <br>
	<input type=password  placeholder=Senha name=senha > <br> <br>
	<input type=number placeholder=CPF name=cpf> <br> <br>
	<button>CADASTRAR</button>
	<br>

<a>
	
 
  <button2 class="bn" type="button" onclick="location.href='Login2.php'">VOLTAR</button2>

</a>
<br>
	

	 </form>
	 </div>
  </body> 
</html>
