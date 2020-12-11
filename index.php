<?php

use PCX\Classes\View;

require './vendor/autoload.php';

$title = 'Hello, world!';
$author = 'WebPajooh';
View::make('view1', compact('title', 'author'));