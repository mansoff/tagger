<?php
declare(strict_types=1);

namespace Tagger\Framework;

use Symfony\Component\DependencyInjection\Dumper\XmlDumper;
use Symfony\Component\Filesystem\Filesystem;

class DiXmlDumper
{
    private $xmlDumper;
    private $fileSystem;

    public function __construct(
        XmlDumper $xmlDumper,
        Filesystem $filesystem
    ) {
        $this->xmlDumper = $xmlDumper;
        $this->fileSystem = $filesystem;
    }

    public function dump(): bool
    {
        $appDir = __DIR__.'/../../../app';
        $this->fileSystem->dumpFile(
            $appDir . '/phpstorm/services.xml',
            $this->xmlDumper->dump()
        );

        return true;
    }
}
