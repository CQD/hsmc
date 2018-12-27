<?php

function __staticFilePath($path)
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
    return  __DIR__ . $path;
}

function __route($path)
{
    if ($file = __staticFilePath($path)) {
        return $file;
    }

    $cate = explode('/', $path)[1] ?? null;
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $isHtml = in_array($ext, ['htm', 'html']);

    $file = null;
    if (!$cate) {
        $file = 'public/home.php';
    } elseif (!$isHtml) {
        $file = null;
    } elseif ('link' === $cate) {
        $file = 'public/link/all.php';
    } elseif (in_array($cate, ['download', 'link', 'info', 'mod', 'tutorial', 'game'])) {
        $file = 'public' . str_replace(['.html', '.htm'], '.php', $path);
    } elseif (false === strpos($path, '/', 1)) {
        $file = 'public' . str_replace(['.html', '.htm'], '.php', $path);
    }

    $fourofourFile = __DIR__ . '/../error/404.php';
    $file = $file
        ? __DIR__ . '/../' . $file
        : $fourofourFile;
    $file = !is_file($file) ? $fourofourFile : $file;

    return $file;
}

include __route(explode('?', $_SERVER['REQUEST_URI'])[0]);


