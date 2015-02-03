<?php
include __DIR__ . '/../src/init.php';

http_response_code(404);

echo \Q\Core\Templator::render('main.twig', [
    'site_title' => '檔案找不到',
    'main_image' => 'banner2.jpg',
    'title' => '404',
    'desc' => '我找不到你要的檔案 /___\\',
    'head_ban' => [
       'type' => 'hero',
    ],
    'content' => ''
]);
