<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ce3228fd258e025030ecae81fa9fa0d
{
    public static $files = array (
        '6e60481d8c04e99474e2ba7b3658ab5a' => __DIR__ . '/..' . '/php-activerecord/php-activerecord/ActiveRecord.php',
        'cf5020b74364025fca0e832b740d6050' => __DIR__ . '/..' . '/avbdr/php-bootstrap-form/PFBC/Form.php',
    );

    public static $classMap = array (
        'upload' => __DIR__ . '/..' . '/verot/class.upload.php/src/class.upload.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4ce3228fd258e025030ecae81fa9fa0d::$classMap;

        }, null, ClassLoader::class);
    }
}
