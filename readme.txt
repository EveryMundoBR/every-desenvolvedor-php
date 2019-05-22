    --- BANCO DE DADOS ---

 1 - CRIE um banco de dados exclusivo para as tabelas do programa.

 2 - Importe para o banco de dados criado o arquivo dump_cep.sql.
 
 ---------------------------------------------------------


   --- CONFIGURAR BANCO DE DADOS NA PASTA CONFIG DO PROGRAMA ---

A configura��o � feita dentro config/
tem o arquivo configDB.php.
Este arquivo possui as configura��es para a conex�o no banco de dados.
Voc� pode alterar cada define de acordo com a configura��o de seu banco. 

-------------------------------------------------------------
      ---- ROTAS ----

Explica��o de como as rotas funcionam:
A configura��o � feita dentro de route/
No arquivo configRoute.php
As keys equivalem ao nome da rota e os valores equivalem ao nome da classe e do m�todo.
 A classe � definida antes do @ e o m�todo � definido ap�s o @. O {get} ap�s o nome da rota 
serve para indicar a existencia de parametro do m�todo.
Importante: O Arquivo que possui o  controller precisa 
ter o mesmo nome da classe do controller. 
------------------------------------------------------------


   --- COMO UTILIZAR -----

Voc� pode utilizar de duas maneiras:

1 - Visualisando os dados:
GET /ceps: Essa URL retorna os �ltimos 10 CEPs do banco de dados.

GET /ceps/{cepEspecifico}: Essa URL retorna dados de um CEP espec�fico no banco de dados.


2 - Utilizando como API:
GET /api.ceps: Essa URL retorna um JSON com os �ltimos 10 CEPs do banco de dados.

GET /api.ceps/{cepEspecifico}: Essa URL retorna um JSON com dados de um CEP espec�fico no banco de dados.