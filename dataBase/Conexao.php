<?php
include(".\config\configDB.php");

/*----------------------------------
 Faz a conexão com o banco de dados.
Utiliza os dados de configuração 
no arquivo config\configDB.php
----------------------------------*/

class ConexaoDB {
	private $servername = SERVERNAME;
	private $username = USERNAME;
	private $password = PASSWORD;
	private $dbname = DBNAME;
	public $conexao;

	function __construct(){
		if (is_null($this->conexao)){
			try {
				$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conexao = $conn;
			}
			catch(PDOException $e)
			{
				echo "Falha na conexao: " . $e->getMessage();
			}
		} 
	}
}

?>


