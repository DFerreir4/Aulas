<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit543b091c91652c474b1a27402089d93d
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DFerreir4\\Composer\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DFerreir4\\Composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit543b091c91652c474b1a27402089d93d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit543b091c91652c474b1a27402089d93d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit543b091c91652c474b1a27402089d93d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit543b091c91652c474b1a27402089d93d::$classMap;

        }, null, ClassLoader::class);
    }
}
