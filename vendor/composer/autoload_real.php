<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb9874da1f89e7df71e4a65bf1a6e412b
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

        spl_autoload_register(array('ComposerAutoloaderInitb9874da1f89e7df71e4a65bf1a6e412b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb9874da1f89e7df71e4a65bf1a6e412b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb9874da1f89e7df71e4a65bf1a6e412b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}