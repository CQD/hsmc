<?php
include __DIR__ . '/../vendor/autoload.php';

use Q\HSMC\Controller\SimpleArticle;
use Q\HSMC\Controller\Error404;
use Q\HSMC\Exception\NotFoundException;

$path = explode('?', $_SERVER['REQUEST_URI'])[0];

try {

__redirectOldUrl($path) or
__servStaticFile($path) or
__route($path)->run([
    'path' => $path,
]);

} catch (NotFoundException $e) {
    (new Error404())->run();
}

///////////////////////////////////////////////////

function __redirectOldUrl($path)
{
    $map = [
        '/cqd.htm' => 'https://cqd.tw',
        '/link/all.htm' => '/link',
        '/info/history/appendix_c_of_the_strategy_guide2.htm' => '/info/history/appendix_c_of_the_strategy_guide',
    ];

    $trimedPath = str_replace(['.htm', '.html'], '', $path);
    $newUrl = ($path !== $trimedPath) && SimpleArticle::pathInWhiteList($trimedPath) ? $trimedPath : false;
    $newUrl = $map[$path] ?? $newUrl;

    if ($newUrl) {
        header("Location: " . str_replace('.php', '', $newUrl));
        http_response_code(301);
        return true;
    }
    return null;
}

function __servStaticFile($path)
{
    $mimeMap = [
        'css'  => 'text/css',
        'js'   => 'text/javascript',
        'txt'  => 'text/plain',
        'xml'  => 'text/xml',
        'ico'  => 'image/ico',
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif'  => 'image/gif',
        'png'  => 'image/png',
        'zip'  => 'application/zip',
        'rar'  => 'application/rar',
        'exe'  => 'application/octet-stream',
    ];

    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));

    if (0 !== strpos($path, '/tutorial/hw2/RDN_Document')
        && 0 !== strpos($path, '/d/')
        && !isset($mimeMap[$ext])
    ) {
        return null;
    }

    $file = __DIR__ . $path;
    if (!is_file($file)) {
        return null;
    }

    $mimeType = $mimeMap[$ext] ?? 'text/html';
    header("Content-type: {$mimeType}");
    include __DIR__ . $path;
    return true;
}

function __route($path)
{
    if (SimpleArticle::pathInWhiteList($path)) {
        return new SimpleArticle();
    }

    return new Error404();
}
