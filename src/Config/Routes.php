<?php

namespace Soon\Config;

$routes->get('/landing', '\Landing\Controllers\Home::index');
$routes->get('/landing/portfolio', '\Landing\Controllers\Home::portfolio');
$routes->get('/landing/page', '\Landing\Controllers\Home::page');

