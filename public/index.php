<?php

/** @var \Symfony\Component\DependencyInjection\ContainerInterface $container */
$container = require __DIR__ . '/../app/preloader.php';

/** @var \Mansoff\Service\Config $config */
$config = $container->get('config');

dump($config->get('autor'));
dump($config->get('project'));