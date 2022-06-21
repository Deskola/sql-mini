<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit335753964fa34a69256197164dccc6ff
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Deskola\\SqlMini\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Deskola\\SqlMini\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit335753964fa34a69256197164dccc6ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit335753964fa34a69256197164dccc6ff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit335753964fa34a69256197164dccc6ff::$classMap;

        }, null, ClassLoader::class);
    }
}