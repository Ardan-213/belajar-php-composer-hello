<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5597edee017a9d59cc26a671b03fe59
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Backendprogrammer\\BelajarPhpComposerHello\\' => 42,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Backendprogrammer\\BelajarPhpComposerHello\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5597edee017a9d59cc26a671b03fe59::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5597edee017a9d59cc26a671b03fe59::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd5597edee017a9d59cc26a671b03fe59::$classMap;

        }, null, ClassLoader::class);
    }
}
