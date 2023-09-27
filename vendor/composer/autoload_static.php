<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1f85a90a84854f537ab7aa041042cda
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1f85a90a84854f537ab7aa041042cda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1f85a90a84854f537ab7aa041042cda::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1f85a90a84854f537ab7aa041042cda::$classMap;

        }, null, ClassLoader::class);
    }
}
