<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7683a2700cc1e4f8911d2b621a1aaf03
{
    public static $files = array (
        'bd6762468f31995077e554c4d617a0a9' => __DIR__ . '/../..' . '/src/ShopifyApp/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Osiset\\ShopifyApp\\Test\\' => 23,
            'Osiset\\ShopifyApp\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Osiset\\ShopifyApp\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Osiset\\ShopifyApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/ShopifyApp',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7683a2700cc1e4f8911d2b621a1aaf03::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7683a2700cc1e4f8911d2b621a1aaf03::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
