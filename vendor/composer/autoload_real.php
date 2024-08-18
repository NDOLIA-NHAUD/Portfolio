<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7653890b2ce2a55ed56d4d8d8d8bb29d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit7653890b2ce2a55ed56d4d8d8d8bb29d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7653890b2ce2a55ed56d4d8d8d8bb29d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7653890b2ce2a55ed56d4d8d8d8bb29d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}