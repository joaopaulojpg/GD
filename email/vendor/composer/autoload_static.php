<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf701a39dccf8770864f532d1455fe394
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf701a39dccf8770864f532d1455fe394::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf701a39dccf8770864f532d1455fe394::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
