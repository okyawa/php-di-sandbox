<?php

declare(strict_types=1);

namespace PhpDiSandbox\app\Containers\Attributes;

use DI\Attribute\Inject;

final class AttributeSample
{
    public function __construct()
    {
    }

    public function index(): void
    {
        echo 'Hello, PHP-DI Attributes!';
    }
}
