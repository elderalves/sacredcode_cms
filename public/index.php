<?php

require(__DIR__.'/../bootstrap/start.php');
require(__DIR__.'/../routers.php');

$match = $router->match();

if($match) {
  list($controller, $method) = explode('@', $match['target']);

  if(!empty($controller)) {
    call_user_func_array(array($controller, $method), array($match['params']));
  }
} else {
  $page = explode($mainUrl, $_SERVER['REQUEST_URI']);

  echo 'Cannot find this Page -> '.$page[1];
}
