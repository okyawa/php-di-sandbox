<?php

declare(strict_types=1);

namespace PhpDiSandbox\app\Containers\Attributes;

use DI\Attribute\Inject;

final class AttributeSample
{
    #[Inject]
    private SomeServiceInterface $someService;

    // #[Inject([SomeServiceInterface::class])]
    // public function __construct(private SomeServiceInterface $someService)
    // {
    // }

    public function index(): void
    {
        $this->someService->echo();
        // echo 'Hello, PHP-DI Attributes!';
    }
}
