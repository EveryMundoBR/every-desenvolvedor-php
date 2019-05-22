<?php 
include(".\app\Models\CepModels.php");

class CepController{

	public function index(){
		/*Retorna os 10 ultimos CEPs do banco de dados*/
        //inclui a view
		include(".\app\Views\inicio.php");
	}

	public function buscaUltimosCeps(){
		/*Recupera os 10 ultimos registros*/
		$buscarCep = new CepModel();
		$retornoUltimosCep =$buscarCep->selectCep();
        //inclui a view inicio
		include(".\app\Views\main.php");
	}

	public function buscaCepEspecifico($cep){
		/*busca CEP especifico passado pela url*/
		$mensagens = [];

		if (is_numeric($cep) && strlen($cep) =='8') {

			$buscarCep = new CepModel();	
			if($buscarCep->selectCep($cep)){
				$retornoBuscarCep = $buscarCep->selectCep($cep);
				$mensagens = [
					"erro" =>false,
					"mensagem" => "CEP encontrado."
				];	
			}else{
				/*Se o CEP não existir no banco,ele consome o webservice e armazena o resultado no banco de dados*/
				$url = "https://viacep.com.br/ws/".$cep."/json/";
				$require = json_decode(@file_get_contents($url),true);
				/*Caso não encontre no webservice,retorna mensagem de erro no array $mensagens*/
				if(is_array($require) && array_key_exists('erro', $require) || is_null($require)){
					$retornoBuscarCep = null;
					$mensagens = [
						"erro" =>true,
						"mensagem" => "CEP não encontrado.Verifique se digitou corretamente."
					];
				}else{
					/*Caso encontre no webservice,cadastra no banco de dados e retorna mensagem no array $mensagens*/
					if($buscarCep->insertCep(preg_replace("/[^0-9]/", "", $require['cep']), $require['logradouro'], $require['localidade'])){


						$mensagens = [
							"erro" =>false,
							"mensagem" => "Nunca vimos este CEP antes...  Novo CEP adicionado ao nosso banco de dados!."
						];	
						$retornoBuscarCep = $buscarCep->selectCep($cep);
					};
				}
			}
		}else{
			$retornoBuscarCep = false;
			$mensagens = [
				"erro" =>true,
				"mensagem" => "Passe somente números com 8 digitos."
			];
		};
		include(".\app\Views\cepEspecifico.php");
	}

	public function selectCep($cep){	
		$buscarCep = new CepModel();
		return $buscarCep->selectCep($cep);
	}

	public function insertCep($cep,$logradouro,$localidade){
		$inserirCep = new CepModel();
		return $inserirCep->insertCep($cep,$logradouro,$localidade);
	}	
}
?>