<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4255850f7c7531dad7b78c8e82c9169b
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lipowei\\configClass\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lipowei\\configClass\\' => 
        array (
            0 => __DIR__ . '/..' . '/lipowei/config/configClass',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4255850f7c7531dad7b78c8e82c9169b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4255850f7c7531dad7b78c8e82c9169b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
