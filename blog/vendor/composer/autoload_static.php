<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit931cc602f4fc96c811a3ce7bba9ce559
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit931cc602f4fc96c811a3ce7bba9ce559::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit931cc602f4fc96c811a3ce7bba9ce559::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
