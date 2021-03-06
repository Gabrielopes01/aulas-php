<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95752f2dc7cf3adddafcc6588b6370bc
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

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95752f2dc7cf3adddafcc6588b6370bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95752f2dc7cf3adddafcc6588b6370bc::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit95752f2dc7cf3adddafcc6588b6370bc::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit95752f2dc7cf3adddafcc6588b6370bc::$classMap;

        }, null, ClassLoader::class);
    }
}
