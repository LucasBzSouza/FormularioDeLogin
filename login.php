
<?php 
session_start();

if(isset($_POST['email']) && empty($_POST['email']) == false) {
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));
	
	$dsn = "mysql:dbname=usuarios;host=127.0.0.1";
	$dbuser = "root";
	$dbpass = "";
	
	try {
		$db = new PDO($dsn, $dbuser, $dbpass);
		
		$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
		
		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			
			$_SESSION['id'] = $dado['id'];
	 
			
			header("Location: index.php");
		}
	} catch(PDOException $e) {
		echo "Falhou: ".$e->getMessage();
		 
	}
}

?>

 
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulário de Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estilo.css'>
     
</head>
<body>
	<div class="container">
    <div class="box">  
    <form class=""  method="POST" autocomplete="off">
        <h1>Login</h1>
		<div class="campo">
			<input type="text" name="email" placeholder="Email" autocomplete="off">
		</div>
		<div class="campo">	
			<input type="password" name="senha" placeholder="Senha" autocomplete="off">
		</div>
		<div class="botao">	
			<input type="submit" name="" value="Fazer Login">
		</div>
		<div class="botao">	
			<a href="cadastro.php">Criar Cadastro</a>
		</div>	
    </form>
	</div>
	</div>
</body>
</html>
