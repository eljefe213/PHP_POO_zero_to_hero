<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c1c95567b1cc2a060b6a7f517514df7
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Colors\\' => 7,
        ),
        'A' => 
        array (
            'AppClass\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Colors\\' => 
        array (
            0 => __DIR__ . '/..' . '/mistic100/randomcolor/src',
        ),
        'AppClass\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c1c95567b1cc2a060b6a7f517514df7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c1c95567b1cc2a060b6a7f517514df7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5c1c95567b1cc2a060b6a7f517514df7::$classMap;

        }, null, ClassLoader::class);
    }
}
