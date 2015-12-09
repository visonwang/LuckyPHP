<?php

// +----------------------------------------------------------------------
// | @author    Candison November (www.kandisheng.com)
// | @location  Nanjing China
// +----------------------------------------------------------------------

// Autoload
function autoloadFramework($className)
{
    $className = str_replace('\\', '/', $className);
    $className = str_replace('LuckyPHP', 'core', $className);
    $className = strtolower($className);
    $file = dirname(__FILE__) . '/' . $className . '.php';
    if (is_file($file)) {
        require_once($file);
        return;
    }
}

spl_autoload_register('autoloadFramework');