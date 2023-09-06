<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3c90d30160c35058b1bb78e68a84703
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Ggr\\Crud\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ggr\\Crud\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3c90d30160c35058b1bb78e68a84703::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3c90d30160c35058b1bb78e68a84703::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd3c90d30160c35058b1bb78e68a84703::$classMap;

        }, null, ClassLoader::class);
    }
}