<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit46f509c1c525b9424779d041c363b738
{
    public static $files = array (
        'aa93c8d900cf0ffa68bbf2c47d526307' => __DIR__ . '/..' . '/saaiful/number-to-word/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Saaiful\\NumberToWord\\' => 21,
        ),
        'N' => 
        array (
            'NumberToWords\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Saaiful\\NumberToWord\\' => 
        array (
            0 => __DIR__ . '/..' . '/saaiful/number-to-word/src',
        ),
        'NumberToWords\\' => 
        array (
            0 => __DIR__ . '/..' . '/kwn/number-to-words/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'English' => __DIR__ . '/../..' . '/app/English.php',
        'Math' => __DIR__ . '/../..' . '/app/Math.php',
        'Person' => __DIR__ . '/../..' . '/app/Person.php',
        'Serialize' => __DIR__ . '/../..' . '/app/Serialize.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit46f509c1c525b9424779d041c363b738::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit46f509c1c525b9424779d041c363b738::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit46f509c1c525b9424779d041c363b738::$classMap;

        }, null, ClassLoader::class);
    }
}