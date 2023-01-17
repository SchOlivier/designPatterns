<?php

spl_autoload_register(function ($class_name) {
    $path = (DIRECTORY_SEPARATOR === '\\')
        ? str_replace('/', '\\', $class_name)
        : str_replace('\\', '/', $class_name);
    include __DIR__ . DIRECTORY_SEPARATOR . $path . '.php';
});
