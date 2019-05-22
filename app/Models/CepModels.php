<?php 
include(".\dataBase\Conexao.php");

class CepModel extends ConexaoDB{

    public function selectCep($cep = null){
    /* caso $cep receba algum parametro,apenas um CEP é retornado. Se não,ele retorna os 10 ultimos CEPs cadastrados
   */
    if($cep == !null){
        $select = $this->conexao->prepare('SELECT logradouro ,cep,localidade
            FROM cep_cadastrados WHERE cep = ? ');
        $select->execute(array($cep));
        $resposta = $select->fetchAll();
        return $resposta;
    } else {
        $resposta = $this->conexao->query("SELECT logradouro ,localidade, cep FROM cep_cadastrados ORDER BY id DESC LIMIT 10")->fetchAll();
        return $resposta;
    }
}

public function insertCep($cep,$logradouro,$localidade){
    try{
        $sql = "INSERT INTO cep_cadastrados (cep,logradouro,localidade)
        VALUES ('".$cep ."','". $logradouro."'".",'".$localidade."')";
        $this->conexao->exec($sql);
        return true;
    }
    catch(PDOException $e)
    {
        $erro = array(
            "erro" => true
        );
    }
}


}
?>