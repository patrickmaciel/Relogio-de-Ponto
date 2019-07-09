<?php
	
class conexao{
	public function getConnection() {
		global $conn;
		$host = "l7cup2om0gngra77.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
		$db = "cg9s7j6xwo4cpwe1";
		$user = "lu5japs63svn66hj";
		$password = "uf0l4xlwb51yo13b";
		try {
			$conn = new PDO("mysql:host=$host; dbname=$db", $user, $password);
			return array("conexao" => $conn, "mensagem" => "Conectado no banco com sucesso");
		} catch (PDOException $e) {
			return array("conexao" => null, "mensagem" => "Ocorreu o erro ao se conectar:<br>" . $e->getMessage());
		}
	}
}
	
?>