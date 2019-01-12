<?php
include __DIR__ . '/../vendor/autoload.php';

use Aptoma\Twig\Extension\MarkdownExtension;
use Aptoma\Twig\Extension\MarkdownEngine;

$path = explode('?', $_SERVER['REQUEST_URI'])[0];

__redirectOldUrl($path);

__renderBasicArticle($path);

require __route($path);

///////////////////////////////////////////////////

function __redirectOldUrl($path)
{
    $map = [
        '/link/all.htm' => '/link',
        '/download/general.htm' => '/download/general',
        '/download/modkit_hw_cat.htm' => '/download/modkit_hw_cat',
        '/download/modkit_hw2.htm' => '/download/modkit_hw2',
    ];

    $newUrl = $map[$path] ?? false;
    if ($newUrl) {
        header("Location: {$newUrl}");
        http_response_code(301);
        exit;
    }
    return false;
}

function __renderBasicArticle($path)
{
    $basicArticleList = [
        '/link',
        '/download/general',
        '/download/modkit_hw_cat',
        '/download/modkit_hw2',
    ];

    if (!in_array($path, $basicArticleList)) {
        return false;
    }

    $engine = new MarkdownEngine\MichelfMarkdownEngine();
    \Q\Core\Templator::addExtension(new MarkdownExtension($engine));

    $data = require __DIR__ . $path . '.php';
    echo \Q\Core\Templator::render('main.twig', $data);

    exit;
}

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
    } elseif (in_array($cate, ['info', 'mod', 'tutorial', 'game'])) {
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


