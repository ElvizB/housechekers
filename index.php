<?php

//$componentes_url = parse_url($_SERVER['REQUEST_URI']);

$componentes_url = parse_url($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
//houseckeers.herokuapp.com


$ruta = $componentes_url['path'];

$partes_ruta = explode('/', $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'vistas/404.php';

if($partes_ruta[0] == 'houseckeers.herokuapp.com'){
  if (count($partes_ruta) == 1){
    $ruta_elegida = 'vistas/home.php';
  }else if (count($partes_ruta) == 2){
    switch($partes_ruta[1]){
      case 'sobre-nosotros':
        $ruta_elegida = 'vistas/sobre-nosotros.php';
        break;
      case 'planes':
          $ruta_elegida = 'vistas/planes.php';
          break;    
      case 'plan-bronce':
            $ruta_elegida = 'vistas/plan-bronce.php';
            break; 
      case 'plan-plata':
        $ruta_elegida = 'vistas/plan-plata.php';
        break; 
      case 'plan-oro':
        $ruta_elegida = 'vistas/plan-oro.php';
        break;
      case 'plan-checkhouse':
        $ruta_elegida = 'vistas/plan-checkhouse.php';
        break;
      case 'plan-checkers':
        $ruta_elegida = 'vistas/plan-checkers.php';
        break;
      case 'contacto':
        $ruta_elegida = 'vistas/contacto.php';
        break;    
    }
  }
}

include_once $ruta_elegida;