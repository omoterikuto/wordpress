<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54fa79f7a05b6712e69df041c62411b5
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit54fa79f7a05b6712e69df041c62411b5::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit54fa79f7a05b6712e69df041c62411b5::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}