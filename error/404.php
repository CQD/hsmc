<?php
include __DIR__ . '/../src/init.php';

http_response_code(404);

echo \Q\Core\Templator::render('main.twig', [
    'title' => '檔案找不到',
    'head_ban' => [
       'class' => ['b2'],
       'type' => 'hero',
       'content' => <<<CC
404
=================
我找不到你要的檔案 /___\
CC
    ],
    'content' => ''
]);
