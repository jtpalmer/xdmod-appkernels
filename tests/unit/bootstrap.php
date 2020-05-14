<?php

$dir = __DIR__;

// Autoloader for main framework test classes.
spl_autoload_register(
    function ($className) use ($dir) {
        $classPath
            = $dir
            . '/../../../xdmod/open_xdmod/modules/xdmod/integration_tests/lib/'
            . str_replace('\\', '/', $className)
            . '.php';

        if (is_readable($classPath)) {
            return require_once $classPath;
        } else {
            return false;
        }
    }
);

// Autoloader for XDMoD classes.
// require_once __DIR__ . '/../../configuration/linker.php';
require_once '/usr/share/xdmod/configuration/linker.php';
