<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07138ab300044f55af8d54d2ecfe263a
{
    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Unirest\\' => 
            array (
                0 => __DIR__ . '/..' . '/mashape/unirest-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit07138ab300044f55af8d54d2ecfe263a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit07138ab300044f55af8d54d2ecfe263a::$classMap;

        }, null, ClassLoader::class);
    }
}
