<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92d1813ea144c87e8ec4b6ee8608c25e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cloudipsp\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cloudipsp\\' => 
        array (
            0 => __DIR__ . '/..' . '/cloudipsp/php-sdk-v2/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92d1813ea144c87e8ec4b6ee8608c25e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92d1813ea144c87e8ec4b6ee8608c25e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit92d1813ea144c87e8ec4b6ee8608c25e::$classMap;

        }, null, ClassLoader::class);
    }
}
