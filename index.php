<?php
$serv = new swoole_http_server('0.0.0.0', 9901);

$serv->on('start', function ($server) {
    echo "Swoole http server is started at http://127.0.0.1:9901\n";
});

$serv->on('request', function ($request, $response) {
    $response->header('Content-Type', 'text/plain');
    $response->end('Hellow, world!');
});

$serv->start();
