<?php
include __DIR__ . '/../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '關於萬艦齊發遊戲本身的歷史',
    'desc' => '來自二十世紀的遊戲跨越二十一世紀的歷程',
    'main_image' => 'banner_box1.jpg',
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC

這裡之後要補上...

MC
]);
