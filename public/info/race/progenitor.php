<?php
include __DIR__ . '/../../../src/init.php';

echo \Q\Core\Templator::render('main.twig', [
    'title' => '先祖文明',
    'desc' => '已滅亡的先進超古代文明',
    'main_image' => 'banner_keeper.jpg',
    'head_ban' => [
       'class' => [],
       'type' => 'sidekick',
    ],
    'content' => <<<MC
先祖文明是一萬年前的強大文明。他們的技術力超越銀河中現存的種族，而且也是超空間核等各種先祖遺物的製造者。
MC
]);
