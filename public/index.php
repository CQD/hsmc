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
    $trimedPath = str_replace(['.htm', '.html'], '', $path);
    if ($path === $trimedPath) {
        return;
    }

    $map = [
        '/cqd.htm' => 'https://cqd.tw',
        '/link/all.htm' => '/link',
        '/info/history/appendix_c_of_the_strategy_guide2.htm' => '/info/history/appendix_c_of_the_strategy_guide',
    ];

    $newUrl = $map[$path] ?? phpList()[$trimedPath] ?? false;
    if ($newUrl) {
        header("Location: " . str_replace('.php', '', $newUrl));
        http_response_code(301);
        exit;
    }
    return false;
}

function __renderBasicArticle($path)
{
    $basicArticleList = [
        '/' => '/home.php',
    ];

    $dataFile = $basicArticleList[$path] ?? phpList()[$path] ?? false;
    if (!$dataFile) {
        return false;
    }

    $engine = new MarkdownEngine\MichelfMarkdownEngine();
    \Q\Core\Templator::addExtension(new MarkdownExtension($engine));

    $data = require __DIR__ . $dataFile;
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

    return __DIR__ . '/../error/404.php';
}

function phpList()
{
    static $map = null;
    if ($map) {
        return $map;
    }

    $m = [
        "/tutorial/hw2/change_unitcap",
        "/tutorial/hw2/bigfile",
        "/tutorial/hw2/wepn__flak_emp",
        "/tutorial/hw2/addability",
        "/tutorial/hw2/create_bigfile",
        "/tutorial/hw2/ship_script",
        "/tutorial/hw2/sound",
        "/tutorial/hw2/background",
        "/tutorial/hw2/about_modding_hw2",
        "/tutorial/hw2/install_mod",
        "/tutorial/hw2/make_badge",
        "/tutorial/hw2/hw2_filetype",
        "/tutorial/hw_cat/vme",
        "/tutorial/hw_cat/dacolyte",
        "/tutorial/hw_cat/shp_hwc_khc1",
        "/tutorial/hw_cat/dreadnought",
        "/tutorial/hw_cat/bigviwer",
        "/tutorial/tutorial_hw_cat",
        "/tutorial/tutorial_hw2",
        "/link",
        "/home",
        "/info/history/cataclysm",
        "/info/history/desertofkharak",
        "/info/history/warof1sttime",
        "/info/history/appendix_c_of_the_strategy_guide",
        "/info/history/chronicle",
        "/info/history/homeworld1",
        "/info/history/homeworld2",
        "/info/race/taiidan",
        "/info/race/kushan_hiigaran",
        "/info/race/progenitor",
        "/info/race/kadesh",
        "/info/race/turanic",
        "/info/race/bentusi",
        "/info/race/vaygr",
        "/info/what/kushan",
        "/info/what/bentusi_weapon",
        "/info/what/names",
        "/info/mis/scale",
        "/info/mis/hw2story",
        "/download/modkit_hw2",
        "/download/modkit_hw_cat",
        "/download/general",
        "/mod/modlist_hw2",
        "/mod/modlist_cat",
        "/mod/modlist_hw",
    ];

    foreach ($m as $i => $k) {
        $map[$k] = $k . '.php';
    }

    return $map;
}
