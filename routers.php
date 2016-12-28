<?php

$mainUrl = '/mtc/mtc-php/mic_modern_php/public';

$router->map('GET', $mainUrl.'/', 'PageController@getShowHome', 'home');
