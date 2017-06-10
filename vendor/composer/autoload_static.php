<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3900937257660f4f7b23a716197bc0b5
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BatyukovArt\\CrudGeneratorTemplates\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BatyukovArt\\CrudGeneratorTemplates\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3900937257660f4f7b23a716197bc0b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3900937257660f4f7b23a716197bc0b5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
