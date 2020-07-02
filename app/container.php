<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$container = new ContainerBuilder();
$container->register('config', \Mansoff\Service\Config::class)
    ->addArgument($configHeap);

return $container;