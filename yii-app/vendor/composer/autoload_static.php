<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit795e22dbac357853026307cba2db881f
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\swiftmailer\\' => 16,
            'yii\\jui\\' => 8,
            'yii\\gii\\' => 8,
            'yii\\faker\\' => 10,
            'yii\\debug\\' => 10,
            'yii\\composer\\' => 13,
            'yii\\codeception\\' => 16,
            'yii\\bootstrap\\' => 14,
            'yii\\' => 4,
        ),
        'k' => 
        array (
            'kartik\\plugins\\dateformatter\\' => 29,
            'kartik\\datecontrol\\' => 19,
            'kartik\\color\\' => 13,
            'kartik\\base\\' => 12,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\swiftmailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-swiftmailer',
        ),
        'yii\\jui\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-jui',
        ),
        'yii\\gii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-gii',
        ),
        'yii\\faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-faker',
        ),
        'yii\\debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-debug',
        ),
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\codeception\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-codeception',
        ),
        'yii\\bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-bootstrap',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'kartik\\plugins\\dateformatter\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/php-date-formatter',
        ),
        'kartik\\datecontrol\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-datecontrol',
        ),
        'kartik\\color\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-widget-colorinput',
        ),
        'kartik\\base\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-krajee-base',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
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
        'D' => 
        array (
            'Diff' => 
            array (
                0 => __DIR__ . '/..' . '/phpspec/php-diff/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit795e22dbac357853026307cba2db881f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit795e22dbac357853026307cba2db881f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit795e22dbac357853026307cba2db881f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
