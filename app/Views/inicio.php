<?php include('header.php') ?>
<body>
	<div class="jumbotron text-center">
		<h1>Seja bem vindo ao busca CEPs!</h1>
		<h2>Instruções abaixo:</h2>
		
	</div>

	<div class="container">
<h2>Visualisando os dados:</h2>
		<div class="row justify-content-left">
			<p> <strong>GET /ceps</strong>: Essa URL retorna os últimos 10 CEPs do banco de dados.</p> 
			<p><strong>GET /ceps/{cepEspecifico}</strong>: Essa URL retorna dados de um CEP específico no banco de dados.</p>
			<br><br><br>
		</div>

		<h2>Utilizando como API:</h2>
		<div class="row justify-content-left">
			<p> <strong>GET /api.ceps</strong>: Essa URL retorna JSON com os últimos 10 CEPs do banco de dados.</p> 
			<p><strong>GET /api.ceps/{cepEspecifico}</strong>: Essa URL retorna JSON com dados de um CEP específico no banco de dados.</p>
			
		</div>
	</div>

</body>
</html>
