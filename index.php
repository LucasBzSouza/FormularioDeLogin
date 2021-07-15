<?php 
session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
	
} else {
	header("Location: login.php");
}
?>

<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pagina Inicial</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estilo.css'>
     
</head>
<body>
	<div class="container">
	<div class="box">
		<h1>Área Restrita a usuários devidamente logados.</h1>
		<div class="botao">		
			<a href="login.php">Retornar à tela de Login</a>
		</div>
	</div>
	</div>
      
     
     
</body>
</html>


