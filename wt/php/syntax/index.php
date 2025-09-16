<?php
// index.php inside wt/php/syntax

return function ($event) {
    // Simple router: pass ?file=myscript.php
    $file = $event['queryStringParameters']['file'] ?? '';
    $target = __DIR__ . '/' . basename($file);

    if ($file && file_exists($target)) {
        include $target;
        return ['statusCode' => 200, 'body' => 'Script executed'];
    }
    return ['statusCode' => 404, 'body' => 'File not found'];
};
