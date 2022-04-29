<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14a4f76c11916b9f5000e708143fb4ec
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit14a4f76c11916b9f5000e708143fb4ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14a4f76c11916b9f5000e708143fb4ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit14a4f76c11916b9f5000e708143fb4ec::$classMap;

        }, null, ClassLoader::class);
    }
}
