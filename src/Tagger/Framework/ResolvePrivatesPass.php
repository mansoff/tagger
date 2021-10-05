<?php
declare(strict_types=1);

namespace Tagger\Framework;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * make all containers public
 */
class ResolvePrivatesPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        foreach ($container->getDefinitions() as $id => $definition) {
            if (!$definition->isPublic()) {
                $definition->setPublic(true);
            }
        }

        foreach ($container->getAliases() as $id => $alias) {
            if (!$alias->isPublic()) {
                $alias->setPublic(true);
            }
        }
    }
}
