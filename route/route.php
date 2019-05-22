<?php 
include("configRoute.php");

$url = (isset($_GET['url'])) ? $_GET['url']: 'empty';
$url = array_filter(explode('/', $url));


if (count($url) >= '3') {
   /*A rota não existe */
   include(".\app\Views\\404.php");
 }


/* caso não passe parametro algum */
if( $url[0] =="empty"){
  $ControllerMetodo = explode('@', $rotas["/"]);
  $controller =$ControllerMetodo[0];
  $metodo =$ControllerMetodo[1];

  include('App\Controllers\\'.$controller.".php");
  $teste = new $controller();
  $teste->$metodo();
}else{
  if(count($url) >= '1' && count($url)  <= '2' ){
    if (array_key_exists($url[0], $rotas) && count($url)  == '2' ) {
     /*A rota existe e passou parametro */
     $ControllerMetodo = explode('@', $rotas[$url[0]."{get}"]);
     $controller =$ControllerMetodo[0];
     $metodo =$ControllerMetodo[1];
     include('App\Controllers\\'.$controller.".php");
     $instancia = new $controller();
     if(method_exists($instancia,$metodo)){
      $instancia->$metodo($url[1]);
    }
  }elseif (array_key_exists($url[0], $rotas) && count($url)  == '1' ) {
    /*A rota existe e não passou parametro */
    $ControllerMetodo = explode('@', $rotas[$url[0]]);
    $controller =$ControllerMetodo[0];
    $metodo =$ControllerMetodo[1];
    include('App\Controllers\\'.$controller.".php");
    $instancia = new $controller();
    if(method_exists($instancia,$metodo)){
      $instancia->$metodo();
    }
  }elseif (!array_key_exists($url[0], $rotas)) {
   /*A rota não existe */
   include(".\app\Views\\404.php");
 }

}
}

?>

