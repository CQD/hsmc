<?php

namespace Q\Core;

class Templator
{
    private static $loader = null;
    private static $twig = null;

    public static function render($template_name, $params)
    {
        static::prepareSingletonInstance();
        return static::$twig->render($template_name, $params);
    }

    private static function prepareSingletonInstance()
    {
        if (static::$loader !== null && static::$twig !== null) {
            return;
        }

        static::$loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../../twig'); //TODO 要改成能用 memcache 處理 cache，以及能設定路徑
        static::$twig = new \Twig_Environment(static::$loader);
    }

}
