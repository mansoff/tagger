<?php

/** @var \Symfony\Component\DependencyInjection\ContainerInterface $container */
$container = require __DIR__ . '/../app/preloader.php';

/** @var \Mansoff\Service\Config $config */
$config = $container->get('config');

/** @var \Tagger\Framework\DiXmlDumper $diDumper */
$diDumper = $container->get('service_container.xml_cache.dumper');
$diDumper->dump();

dump($config->get('autor'));
dump($config->get('project'));

$exmaple = $container->get('utility.exmaple');

dump($exmaple->getRandom());