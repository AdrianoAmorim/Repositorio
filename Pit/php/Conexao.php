<?php
class Conexao {
	private $host = "localhost";
	private $user = "root";
	private $pass = "mudar@senha";
	private $con;

	function conectar($usuario, $senha){
		try {
			$con = new PDO("mysql:host=localhost;dbname=pit", $usuario, $senha);
		} catch (PDOException $erro_con) {
			header("Location: login.php");
		}
		if ($con) {
			setcookie("sessao", md5($user), time() + 1800);
		}
	}

}
?>

