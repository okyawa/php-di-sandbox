<?php

/**
 * DIする依存関係定義
 */

declare(strict_types=1);

namespace PhpDiSandbox\app\Providers;

use PhpDiSandbox\app\Containers\Attributes\SomeService;
use PhpDiSandbox\app\Containers\Attributes\SomeServiceInterface;

use function DI\create;
use function DI\factory;
use function DI\get;

return [
    SomeServiceInterface::class => create(SomeService::class),
];
