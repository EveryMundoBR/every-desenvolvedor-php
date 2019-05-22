<?php 
/*----------------------------------------------
Aqui é possivel definir as rotas utilizadas.
As keys equivalem ao nome da rota e os valores
equivalem ao nome da classe e do metodo.
O a classe é antes do @ e o método é após o @.
O {get} após o nome da rota serve para indicar a 
existencia de parametro do método.
Nota: O Arquivo que possui o  controller precisa 
ter o mesmo nome da classe do controller. 
----------------------------------------------- */

$rotas = [
	"/"           => "CepController@index",
	"ceps"        => "CepController@buscaUltimosCeps",
	"ceps{get}"   => "CepController@buscaCepEspecifico",

	"api.ceps"        => "CepJSONController@buscaUltimosCeps",
	"api.ceps{get}"   => "CepJSONController@buscaCepEspecifico",
];
?>

