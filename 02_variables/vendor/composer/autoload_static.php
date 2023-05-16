<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit125a22b54a8d0d3fc8101ebc89f6dc4c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit125a22b54a8d0d3fc8101ebc89f6dc4c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit125a22b54a8d0d3fc8101ebc89f6dc4c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit125a22b54a8d0d3fc8101ebc89f6dc4c::$classMap;

        }, null, ClassLoader::class);
    }
}
