<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdb1a0b6e12aea2480eafc68947f002b
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Leo\\BankIdAuthentication\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Leo\\BankIdAuthentication\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdb1a0b6e12aea2480eafc68947f002b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdb1a0b6e12aea2480eafc68947f002b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}