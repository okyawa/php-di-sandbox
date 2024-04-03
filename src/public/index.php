<?php

declare(strict_types=1);

namespace PhpDiSandbox\Public;

use PhpDiSandbox\app\Containers\Attributes\AttributeSample;
use PhpDiSandbox\app\Providers\DI;

require dirname(__FILE__, 3) . '/vendor/autoload.php';

use DI\ContainerBuilder;
use PhpDiSandbox\app\Containers\Attributes\SomeService;
use PhpDiSandbox\app\Containers\Attributes\SomeServiceInterface;
use function DI\create;
// PHP-DIの初期化と設定
$containerBuilder = new ContainerBuilder();
// Attributesを使ったDIを有効にする
$containerBuilder->useAttributes(true);
$containerBuilder->addDefinitions([
    SomeServiceInterface::class => create(SomeService::class),
]);
$container = $containerBuilder->build();
$attributeSample = $container->get(AttributeSample::class);
$attributeSample->index();

// PHP-DIのAttributes検証
// $attributeSample = DI::get(AttributeSample::class);
// $attributeSample = new AttributeSample();
// $attributeSample->index();
