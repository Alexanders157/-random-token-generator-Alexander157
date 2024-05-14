<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90b6f9ab4b8f97570f1bd136c8c96136
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alexander\\RandomTokenGeneratorAlexander157\\' => 43,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alexander\\RandomTokenGeneratorAlexander157\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit90b6f9ab4b8f97570f1bd136c8c96136::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90b6f9ab4b8f97570f1bd136c8c96136::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90b6f9ab4b8f97570f1bd136c8c96136::$classMap;

        }, null, ClassLoader::class);
    }
}
