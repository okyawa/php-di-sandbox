<?php

declare(strict_types=1);

namespace PhpDiSandbox\app\Containers\Attributes;

final class SomeService implements SomeServiceInterface
{
    public function echo(): void
    {
        echo 'Hello, PHP-DI Attributes!';
    }
}
