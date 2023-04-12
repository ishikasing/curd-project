<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit732e759ac81eb5744599f41bdd11b6f1
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Curd\\Project\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Curd\\Project\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit732e759ac81eb5744599f41bdd11b6f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit732e759ac81eb5744599f41bdd11b6f1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit732e759ac81eb5744599f41bdd11b6f1::$classMap;

        }, null, ClassLoader::class);
    }
}
