<?php
session_start();
	if(isset($_POST['email']) && empty($_POST['email']) == false) {
	try{
		 
		$email = addslashes($_POST['email']);
		$senha = md5(addslashes($_POST['senha']));
	
		$dsn = "mysql:dbname=usuarios;host=127.0.0.1";
		$dbuser = "root";
		$dbpass = "";
		$db = new PDO($dsn, $dbuser, $dbpass);
		
		
		$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email'");
		if($sql->rowCount() == 0) {
			$dado = $sql->fetch();
			
			 
			$db->query("INSERT INTO usuarios SET email = '$email', senha = '$senha'");
			?>
			<script>
				alert("Email cadastrado com sucesso!!!");
			</script>	
		<?php
			
			 
		} else {
			?>  
				<script>
					alert("Email já cadastrado!!!");
				</script>	
			<?php 
			
		}
		
		

		
	} catch(PDOException $e) {
		die($e->getMessage());
	}
}	


?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulário de Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estilo.css'>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="container">
    <div class="box"> 
    <form method="POST" autocomplete="off" onsubmit="return validar()">
        <h1>Cadastro</h1>
        <div class="campo">
			<input type="text" name="email" id="email" placeholder="Email" autocomplete="off">
		</div>
		<div class="campo">
		    <input type="password" name="senha" id="senha" placeholder="Senha" autocomplete="off">
		</div>
		<div class="botao">	
			<input type="submit" name="" value="Cadastrar">
		</div>
		<div class="botao">		
			<a href="login.php">Logar</a>
		</div>	
    </form>
	</div>
	</div>
</body>
</html>
