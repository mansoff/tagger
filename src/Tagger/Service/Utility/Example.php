<?php
declare(strict_types=1);

namespace Tagger\Service\Utility;

class Example
{
    public function getRandom(): string
    {
        return \chr(\random_int(65, 90));
    }
}