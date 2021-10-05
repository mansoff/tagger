<?php
declare(strict_types=1);

use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Definition;

/**
 * @var $container \Symfony\Component\DependencyInjection\ContainerBuilder
 */

$container->register('utility.exmaple', \Tagger\Service\Utility\Example::class);


return $container;
