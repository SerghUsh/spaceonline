<?php
function domain()
{
    return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
}

function href($page, $file = 'index')
{
    echo domain() . '/page/' . $page . '/' . $file . '.php';
}

function put($fileName)
{
    $filePath = __DIR__ . '/' . $fileName . '.php';
    if (file_exists($filePath)) {
        include($filePath);
    }
}