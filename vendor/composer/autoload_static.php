<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit62f47698bf3af7ed14e58353ccebfea4
{
    public static $files = array (
        'a2c78434f64e5f5ed402f42eee19c025' => __DIR__ . '/..' . '/ipl/stdlib/src/functions_include.php',
        '14a6a72370de4c08174524928551af59' => __DIR__ . '/..' . '/ipl/stdlib/src/polyfill-php71.php',
        '1096382ca2befc3ea8edac3309309ec4' => __DIR__ . '/..' . '/ipl/stdlib/src/polyfill-php70.php',
        '6076de347104821999fcfc82c8f19bc5' => __DIR__ . '/..' . '/ipl/i18n/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ipl\\Web\\' => 8,
            'ipl\\Validator\\' => 14,
            'ipl\\Stdlib\\' => 11,
            'ipl\\Sql\\' => 8,
            'ipl\\Orm\\' => 8,
            'ipl\\I18n\\' => 9,
            'ipl\\Html\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ipl\\Web\\' => 
        array (
            0 => __DIR__ . '/..' . '/ipl/web/src',
        ),
        'ipl\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/ipl/validator/src',
        ),
        'ipl\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/ipl/stdlib/src',
        ),
        'ipl\\Sql\\' => 
        array (
            0 => __DIR__ . '/..' . '/ipl/sql/src',
        ),
        'ipl\\Orm\\' => 
        array (
            0 => __DIR__ . '/..' . '/ipl/orm/src',
        ),
        'ipl\\I18n\\' => 
        array (
            0 => __DIR__ . '/..' . '/ipl/i18n/src',
        ),
        'ipl\\Html\\' => 
        array (
            0 => __DIR__ . '/..' . '/ipl/html/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
        'A' => 
        array (
            'AssetLoader' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit62f47698bf3af7ed14e58353ccebfea4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit62f47698bf3af7ed14e58353ccebfea4::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit62f47698bf3af7ed14e58353ccebfea4::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
