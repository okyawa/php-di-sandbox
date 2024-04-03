<?php

declare(strict_types=1);

namespace PhpDiSandbox\app\Providers;

use DI\Container;
use DI\ContainerBuilder;

/**
 * PHP-DIを初期化してContainerインスタンスをシングルトンで保持するクラス
 */
final class DI
{
    private static Container $container;

    public static function container(): Container
    {
        if (!isset(self::$container)) {
            // PHP-DIの初期化と設定
            $builder = new ContainerBuilder();

            // ここにDIの定義配列ファイルを追加
            $builder->addDefinitions(dirname(__FILE__) . '/DefaultProvider.php');

            self::$container = $builder->build();
        }
        return self::$container;
    }

    /**
     * 該当クラスのインスタンスを生成して返す
     * @template T
     * @param class-string<T> $className
     * @return T
     */
    public static function get(string $className)
    {
        try {
            return self::container()->get($className);
        } catch (\Exception $exception) {
            $message = 'Fatal Error - PhpDiSandbox\app\Providers\DI::get() - ';
            $message .= 'Failed to get DI container instance of "' . $className . '"';
            $message .= $exception->getMessage();
            error_log($message);
            die($message);
        }
    }
}
