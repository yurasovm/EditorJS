<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d201d5cc39dadf28b2542b5ed926b48
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EditorJS\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EditorJS\\' => 
        array (
            0 => __DIR__ . '/..' . '/codex-team/editor.js/EditorJS',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d201d5cc39dadf28b2542b5ed926b48::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d201d5cc39dadf28b2542b5ed926b48::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4d201d5cc39dadf28b2542b5ed926b48::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}