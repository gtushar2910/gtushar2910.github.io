<?php
return function ($event) {
    $file = $event['queryStringParameters']['file'] ?? '';
    $path = __DIR__ . '/' . basename($file);

    if ($file && file_exists($path)) {
        ob_start();
        include $path;
        $output = ob_get_clean();
        return [
            'statusCode' => 200,
            'body' => $output
        ];
    }

    return [
        'statusCode' => 404,
        'body' => "Script not found: $file"
    ];
};
