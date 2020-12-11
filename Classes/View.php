<?php

namespace PCX\Classes;

class View
{
    public static function make($viewName, $data = [])
    {
        $viewFile = dirname(__FILE__) . '/../Views/' . $viewName . '.php';

        extract($data, EXTR_SKIP);

        require $viewFile;
    }
}