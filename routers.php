<?php

$mainUrl = getenv('MAIN_URL');

$router->map('GET', $mainUrl.'/', 'PageController@getShowHome', 'home');

$router->map('GET', $mainUrl.'/testdb', 'PageController@getShowDB', 'testdb');

$router->map('GET', $mainUrl.'/register', 'PageController@getRegister', 'register');
$router->map('POST', $mainUrl.'/register', 'PageController@postRegister', 'register_post');
