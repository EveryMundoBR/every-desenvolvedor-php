    --- BANCO DE DADOS ---

 1 - CRIE um banco de dados exclusivo para as tabelas do programa.

 2 - Importe para o banco de dados criado o arquivo dump_cep.sql.
 
 ---------------------------------------------------------


   --- CONFIGURAR BANCO DE DADOS NA PASTA CONFIG DO PROGRAMA ---

A configuração é feita dentro config/
tem o arquivo configDB.php.
Este arquivo possui as configurações para a conexão no banco de dados.
Você pode alterar cada define de acordo com a configuração de seu banco. 

-------------------------------------------------------------
      ---- ROTAS ----

Explicação de como as rotas funcionam:
A configuração é feita dentro de route/
No arquivo configRoute.php
As keys equivalem ao nome da rota e os valores equivalem ao nome da classe e do método.
 A classe é definida antes do @ e o método é definido após o @. O {get} após o nome da rota 
serve para indicar a existencia de parametro do método.
Importante: O Arquivo que possui o  controller precisa 
ter o mesmo nome da classe do controller. 
------------------------------------------------------------


   --- COMO UTILIZAR -----

Você pode utilizar de duas maneiras:

1 - Visualisando os dados:
GET /ceps: Essa URL retorna os últimos 10 CEPs do banco de dados.

GET /ceps/{cepEspecifico}: Essa URL retorna dados de um CEP específico no banco de dados.


2 - Utilizando como API:
GET /api.ceps: Essa URL retorna um JSON com os últimos 10 CEPs do banco de dados.

GET /api.ceps/{cepEspecifico}: Essa URL retorna um JSON com dados de um CEP específico no banco de dados.