<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2779f3f9c1cc594c956f36d243407aef
{
    public static $files = array (
        'b45b351e6b6f7487d819961fef2fda77' => __DIR__ . '/..' . '/jakeasmith/http_build_url/src/http_build_url.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Contactform' => __DIR__ . '/..' . '/prestashop/contactform/contactform.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2779f3f9c1cc594c956f36d243407aef::$classMap;

        }, null, ClassLoader::class);
    }
}