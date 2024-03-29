<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f6b8c971aab80bcbeef5280e09f6f2a
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lbuchs\\WebAuthn\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lbuchs\\WebAuthn\\' => 
        array (
            0 => __DIR__ . '/..' . '/lbuchs/webauthn/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f6b8c971aab80bcbeef5280e09f6f2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f6b8c971aab80bcbeef5280e09f6f2a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5f6b8c971aab80bcbeef5280e09f6f2a::$classMap;

        }, null, ClassLoader::class);
    }
}
