<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symfony\Component\Config\FileLocator;
use Tagger\Framework\ResolvePrivatesPass;

$container = new ContainerBuilder();
$container->addCompilerPass(new ResolvePrivatesPass());

$loader = new PhpFileLoader($container, new FileLocator(__DIR__.'/includes'));

$loader->load('system.php');
$loader->load('utility.php');
$loader->load('command.php');

$container->compile();

return $container;
