<?php

declare(strict_types=1);

namespace PhpDiSandbox\Public;

use PhpDiSandbox\app\Containers\Attributes\AttributeSample;

require dirname(__FILE__, 3) . '/vendor/autoload.php';

// PHP-DIのAttributes検証
$attributeSample = new AttributeSample();
$attributeSample->index();
