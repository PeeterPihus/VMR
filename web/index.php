<?php// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// definitions

$apt['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), [
	'twig.path'=>__DIR__'./../views',
]);

$app->get('/hello', function () use($app) {
	return $app['twig']->render('base.html.twig');
});

$app->run();
?>
