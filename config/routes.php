<?php

$routes = new RouteCollection();
$routes->add('lucky_number', new Route('/lucky/number', array(
	'_controller' => [LuckyController::class, 'number'])));

$routes->add('initial_controller', new Route('/', array(
	'_controller' => [InitialController::class, 'index'])));