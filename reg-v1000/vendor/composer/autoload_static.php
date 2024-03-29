<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42e50948ef9cce8afa10c6c7257f3541
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UserRegistration\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UserRegistration\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42e50948ef9cce8afa10c6c7257f3541::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42e50948ef9cce8afa10c6c7257f3541::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
