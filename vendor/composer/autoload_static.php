<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77587b1907bb62ec73c73703ec0c95ec
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
            0 => __DIR__ . '/../..' . '/_core/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77587b1907bb62ec73c73703ec0c95ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77587b1907bb62ec73c73703ec0c95ec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
