<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit794ceb38800e688a9203b622cf886379
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tools\\' => 6,
        ),
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'APP\\Entity\\Client' => __DIR__ . '/../..' . '/src/Entity/Client.php',
        'APP\\Entity\\Commande' => __DIR__ . '/../..' . '/src/Entity/Commande.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit794ceb38800e688a9203b622cf886379::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit794ceb38800e688a9203b622cf886379::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit794ceb38800e688a9203b622cf886379::$classMap;

        }, null, ClassLoader::class);
    }
}