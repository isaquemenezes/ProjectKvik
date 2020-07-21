<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit070eb10d553f35f892ffcc99c7646317
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZxcvbnPhp\\' => 10,
        ),
        'T' => 
        array (
            'Traits\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZxcvbnPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/bjeavons/zxcvbn-php/src',
        ),
        'Traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../traits',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../models',
        ),
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit070eb10d553f35f892ffcc99c7646317::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit070eb10d553f35f892ffcc99c7646317::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
