<?php
error_reporting(E_ALL);

class Autoloader{
    public static function registerAutoload(): int
    {
        return spl_autoload_register();
    }
}
