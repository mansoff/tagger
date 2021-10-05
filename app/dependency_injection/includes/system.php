<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Definition;

/**
 * @var $container \Symfony\Component\DependencyInjection\ContainerBuilder
 */


$container->register('config', \Mansoff\Service\Config::class)
    ->addArgument(require __DIR__.'/../../config/main.php');

$container->register('symfony.file_system', \Symfony\Component\Filesystem\Filesystem::class);

$container->register('symfony.dependency_injection.xml.dumper', \Symfony\Component\DependencyInjection\Dumper\XmlDumper::class)
    ->addArgument(new Reference('service_container'));

$container->register('service_container.xml_cache.dumper', \Tagger\Framework\DiXmlDumper::class)
    ->setArguments([
        new Reference('symfony.dependency_injection.xml.dumper'),
        new Reference('symfony.file_system'),
    ]);


return $container;
