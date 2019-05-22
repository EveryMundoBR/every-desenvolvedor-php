<?php include('header.php') ?>
<body>
  <div class="jumbotron text-center">
    <h1>Busca CEPs</h1>
  </div>
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col- justify-content-center">
       <?php if($retornoBuscarCep){ ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong><?php echo $mensagens['mensagem'] ?></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <p><strong>CEP: </strong><?php echo $retornoBuscarCep[0]['cep']  ?></p> 
        <p><strong>Logradouro: </strong><?php echo $retornoBuscarCep[0]['logradouro']  ?></p>
        <p><strong>Localidade: </strong><?php echo $retornoBuscarCep[0]['localidade']  ?></p> 

      <?php }else{ ?>
       <?php if ($mensagens['erro']){?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong><?php echo $mensagens['mensagem'] ?></strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } } ?> 
    </div>
  </div>
</div>

</body>
</html>
