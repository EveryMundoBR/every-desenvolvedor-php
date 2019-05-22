<?php include('header.php') ?>
<body>
  <div class="jumbotron text-center">
    <h1>Busca CEPs</h1>
  </div>
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col- justify-content-center">
        <h2>Ultimos 10 CEPs</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>CEP</th>
              <th>Logradouro</th>
              <th>Localidade</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($retornoUltimosCep as $ceps) { ?>
              <tr>
                <td><?php echo $ceps['cep'] ?></td>
                <td><?php echo $ceps['logradouro'] ?></td>
                <td><?php echo $ceps['localidade'] ?></td>
              </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
